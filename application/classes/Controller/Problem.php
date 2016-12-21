<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Problem extends Controller_Base
{


    public function before()
    {
        parent::before();

        $this->current_user = $this->check_login();
    }

    public function action_index()
    {
        $this->view = 'problem/userlist';
        $this->action_list();
    }

    /*
    author : zhang zexiang
    function : 列出普通用户题目
    date : 2016.11.5 09:57
     */
    private function list_stage_problem(){

        $this->view = 'problem/userlist';
        $this->template_data['title'] = __('problem.list.problem_set_:id', array(':id' => 1));
        $user = $this->get_current_user();

        $stage = Arr::get($_GET,'stage');
        $stage = $stage == NULL ? $user->stage : $stage;
        $this->template_data['stages'] = $user->stage;
        $this->template_data['stage'] = $stage;

        $group_config = Model_GroupConfig::find_by_id($user->group_id);
        //题在组里没有配置
        if ($group_config == NULL) {
            $this->flash_error(__('common.group_noconfigure'));
            return;
        }

        $current_problem = Model_UsersProblem::find_problem_id_by_stage($user->user_id, $stage);

        //第一次进入阶段一，生成第一阶段题
        if (count($current_problem) == 0) {
            if($this->generate_problem_by_level(1) == false)
                return;
            //重新获取该阶段题目
            $current_problem = Model_UsersProblem::find_problem_id_by_stage($user->user_id, $stage);
            
        }
        //前端显示内容嵌入模板
        $stage_num = $group_config->stage_num;
        $stage_level = json_decode($group_config->stage_level,true);
        $pass_num = json_decode($group_config->pass_num,true);
        $show_num = json_decode($group_config->show_num,true);

        $this->template_data['current_problem_level'] = $stage_level[$stage];
        $all_stage_problem = array();
        foreach ($current_problem as $key) {
            array_push($all_stage_problem,Model_Problem::find_by_id($key));
        }
        array_multisort($all_stage_problem);
        $this->template_data['num'] = $all_stage_problem;

    }

    /**
    * 随机生成下一阶段题目
    */
    private function generate_problem_by_level($level){
        $user = $this->get_current_user();
        $all_level_problem = Model_Problem::find_problem_by_level($level);//level阶段所有题
        $all_ids = array();//所有ids
        //取出其中的problem id
        foreach ($all_level_problem as $p) {
            array_push($all_ids, $p->problem_id);
        }
        $created_problems = Model_UsersProblem::find_current_all_problem_id($user->user_id);//所有已经产生的题
        $all_ids = array_diff($all_ids , $created_problems);//取出所有没有生成过的题
        try{
            $group_config = Model_GroupConfig::find_by_id($user->group_id);
            $show_num = json_decode($group_config->show_num,true);
            //随出n个题
            $random_index = array_rand($all_ids,$show_num[$user->stage]);//取出value的差集
            $result = array();//取出选出的题id
            foreach ($random_index as $key => $value) {
                array_push($result, $all_ids[$value]);
            }

            array_multisort($result);

            $users_problem = new Model_UsersProblem;
            $users_problem->user_id = $user->user_id;
            $users_problem->problem_set = json_encode($result);
            $users_problem->stage = $user->stage;
            $users_problem->save();

            return true;

        }catch(Exception $e){
            $this->flash_error(__('user.profile.no_enough_problem'));
            $this->view = 'problem/userlist_insufficient';
            return false;
        }



    }

    /*
    author : zhang zexiang
    funtion : 显示下一阶段题
    date : 2016.11.8 08:50
    */
    public function action_nextstage(){
        // $this->view = 'problem/next';
        $user = $this->get_current_user();
        $group_config = Model_GroupConfig::find_by_id($user->group_id);

        //计算用户在当前阶段通过题的数量
        $pass_numbers = 0;
        $current_problem = 
            Model_UsersProblem::find_problem_id_by_stage($user->user_id, $user->stage);

        foreach ($current_problem as $key) {
            $p = Model_Problem::find_by_id($key);
            if(e::pass_status($p)=='passed'){
                $pass_numbers++;
            }
        }

        $current_stage_pass_num = $group_config->min_pass_num_by_stage($user->stage);
        var_dump($pass_numbers.' '.$current_stage_pass_num);
        //判断用户是否通过该阶段
        if($pass_numbers >=  $current_stage_pass_num){
            $user->stage = ($user->stage < $group_config->stage_num) ? $user->stage+1 : $user->stage; //判断用户是否达到顶级
            $user->save();

            $stage_level = json_decode($group_config->stage_level,true); 
            if($this->generate_problem_by_level($stage_level[$user->stage])==false){
                $this->flash_error(__('user.profile.no_enough_problem',array()));
            }

        }else{
            $this->flash_error(__('user.profile.cannot_pass',array(':pass'=>$pass_numbers,':total'=>$current_stage_pass_num)));
        }
        $this->list_stage_problem();
    }


    /*
    author : zhang zexiang
    funtion : supplement problem by group config when Y defunct
    date : 2016.11.23 09:55

    $supp : config show num - current num
    */

    public function action_supplement($supp, $current_problem, $current_problem_level,$current_show_num,$current_user){


    $all_leve_problem = Model_UsersProblem::find_level_problem($current_problem_level);
    $num = count($all_leve_problem);

    $all_leve_problem_array = array();
    foreach ($all_leve_problem as $key) {
        # code...
        array_push($all_leve_problem_array, $key['problem_id']);
    }

    $current_problem_array = array();
    foreach ($current_problem as $key) {
        # code...
        array_push($current_problem_array, $key["problem_id"]);
    }

    $left_level_problem = array_diff($all_leve_problem_array,$current_problem_array);

    $problemlist = array_rand($left_level_problem,$supp);


    if(sizeof($problemlist)==1){

        $users_problem = new Model_UsersProblem;
        $users_problem->user_id = $current_user->user_id;
        $users_problem->problem_id = $left_level_problem[$problemlist];
        $users_problem->stage = $current_user->stage;

        $users_problem->save();

        return array($left_level_problem[$problemlist]);
    }

    $end = array();
    foreach ($problemlist as $key) {
        # code...
        array_push($end, $left_level_problem[$key]);

        $users_problem = new Model_UsersProblem;
        $users_problem->user_id = $current_user->user_id;
        $users_problem->problem_id = $left_level_problem[$key];
        $users_problem->stage = $current_user->stage;

        $users_problem->save();

    }

    return $end;

    }

    /**
    * 显示用户题目列表
    */
    public function action_list(){

        $current_user = $this->get_current_user();
        //普通用户
        if ($current_user !=NULL && !$current_user->is_admin() && !$current_user->is_leader()) {
            $this->list_stage_problem();
            return;
        }

        $this->view = 'problem/list';
        $default_page = Session::instance()->get('volume', 1);
        // get user last volume

        if ( $current_user )
        {
            $default_page = $current_user->get_last_volume();
        }

        $page = $this->request->param('id', $default_page);
        // save current volume
        Session::instance()->set('volume', $page);

        $total_volumes = Model_Problem::number_of_volume();

        $page = e::adjust_scope($page, $total_volumes);

        $this->template_data['problemlist'] = Model_Problem::problems_for_volume($page);

        $title = __('problem.list.problem_set_:id', array(':id' => $page));
        $this->template_data['title'] = $title;

        $this->template_data['page'] = $page;
        $this->template_data['pages'] = $total_volumes;

    }

    /**
    * 显示一道题目详细信息
    */
    public function action_show()
    {
        // initial
        $pid = $this->request->param('id', null);

        $problem = Model_Problem::find_by_id($pid);
        $current_user = $this->get_current_user();


        //if this user is not lead or root , he not allow to see all problem
        if(Model_Privilege::permission_of_user($current_user->user_id)==null){

            $all_problem_id = Model_UsersProblem::find_current_all_problem_id($current_user->user_id);

            //检测正访问的题是否在current_user的题库中
            if(!in_array($pid, $all_problem_id)){
                $this->action_list();
            }

        }

        if ( $problem AND $problem->can_user_access($current_user) ){
            //TODO: is defunct problem can access?
            $this->template_data['title'] = $problem['title'];
            $this->template_data['problem'] = $problem;
        } else {
            throw new Exception_Page(__('common.problem_not_found'));
        }
    }

    public function action_submit()
    {
        $current_user = $this->check_login();

        if ( $this->request->is_post() ) {
            $pid = $this->get_post('pid');
            $cid = $this->get_post('cid', null);
            $cpid = $this->get_post('cpid', -1);

            // if no pid, then it should be contest

            // if contest id set, then this submit a contest problem
            if ( $cid AND $cpid !== -1)
            {
                $contest = Model_Contest::find_by_id($cid);
                if ( $contest AND $contest->can_user_access($current_user) )
                {
                    $problem = $contest->problem($cpid);
                    if ( !$problem )
                    {
                        throw new Exception_Page(__('common.problem_not_found'));
                    }
                } else {
                    throw new Exception_Page(__('common.contest_not_found'));
                }
            } else {
                // so is normal submit
                $problem = Model_Problem::find_by_id($pid);

                if ( ! $problem OR !$problem->can_user_access($current_user) )
                {
                    throw new Exception_Page(__('common.problem_not_found'));
                }
            }

            $last_submission = $current_user->get_last_submission();
            if ($last_submission) {
                $d_start = strtotime($last_submission);
                $d_end = time();
                $limitation = OJ::get_submit_time();
                if ($d_end - $d_start < $limitation) {
                    throw new Exception_Page(__('common.too_quick_:sec', array(':sec' => $limitation)));
                }
            }

            $source_code = $this->get_raw_post('source');
            $lang = $this->get_post('language');

            $solution = Model_Solution::create($current_user, $problem, $lang, $source_code);

            if ( $cid )
            {
                // set contest info
                $solution->contest_id = $cid;
                $solution->num = $cpid;
            }
            $solution->save();

            // set user favorite language
            $current_user->language = $lang;
            $current_user->save();

            $this->redirect('/status');
            return;
        } else {
            $pid = $this->request->param('id', null);
            $this->template_data['pid'] = OJ::clean_data($pid);
        }

        $this->template_data['cid'] = $this->get_query('cid', null);
        $this->template_data['cpid'] = $this->get_query('pid', null);

        $this->template_data['default_lang'] = $current_user->language;

        $this->template_data['title'] = __('problem.submit.submit_code');
    }

    public function action_summary(){
        // init
        $problem_id = $this->request->param('id');
        $problem = Model_Problem::find_by_id($problem_id);
        $page = $this->get_query('page', 1);
        $per_page = OJ::per_page;

        $current_user = $this->get_current_user();
        $current_group = $current_user['group_id'];
        if ( ! $problem OR ! $problem->can_user_access($current_user) )
            throw new Exception_Page(__('common.problem_not_found'));

        $this->template_data['problem_id'] = $problem_id;
        $this->template_data['start_rank'] = $per_page * ($page - 1);
        $this->template_data['summary'] = $problem->summary();
        $this->template_data['total'] = ceil($this->template_data['summary']['submit_user'] / $per_page);
        $this->template_data['solutions'] = $problem->best_solution($current_group,$page-1, $per_page);

        $this->template_data['title']
            = __('problem.summary.summary_of_:id', array(':id' => $problem_id));

    }

    public function action_search(){
        // init
        $text = $this->get_query('text');
        $area = $this->get_query('area');

        if ($text === NULL) {
            // TODO: add better handler
            $this->action_list();
        }

        // TODO: validation
        $list = Model_Problem::search($text, $area);

        $this->template_data['area'] = $area;
        $this->template_data['search_text'] = $text;
        $this->template_data['problemlist'] = $list;
        $this->template_data['title']
            = __(':text_search_result', array(':text' => $text));
    }

} 

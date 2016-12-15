<?php defined('SYSPATH') or die('No direct script access.');

/**
* 管理员主界面抽象控制器
*/
abstract class Controller_Common_Index extends Controller_Common_Base{

	/**
     * 重新判题功能
     */
    public function action_rejudge()
    {
        if ( $this->request->is_post() ) {
            $type = $this->get_post('type');
            $id = intval($this->get_post('typeid'));

            if ($type == 'PROBLEM') {
                $problem = Model_Problem::find_by_id($id);
                if ( $problem ){
                    $problem->rejudge();
                    $this->flash_info(__('common.rejudge_:problem',
                        array(':problem' => $problem->problem_id)));
                }
            } else if ($type == 'SOLUTION') {
                $solution = Model_Solution::find_by_id($id);
                if ( $solution ){
                    $solution->rejudge();
                    $this->flash_info(__('common.rejudge_:runid',
                        array(':runid' => $solution->solution_id)));
                }
            }
        }
        $this->redirect('/admin/');
    }

    /*
    author : zhang zexiang
    function : 生成邀请码，存入数据库
    */
    public function action_code(){

        $user = $this->get_current_user();
        $this->template_data['user'] = $user;

        $this->view = $this->rootPath().'/index/index';
        $this->template_data['title'] = "code";

        $group_id = Arr::get($_GET,'id');
        $type = $this->isLeader()?1:Arr::get($_GET,'type');
        $limit = Arr::get($_GET,'num');
        $time = Arr::get($_GET,'time');
        $group_config = Model_Groups::find_by_id($group_id);

        if ($group_config) {
            if(Model_GroupConfig::find_by_id($group_id)==null && $type == 1){
                $this->flash_info(__('admin.index.group_not_configured'));
                $this->action_index();
                return;
            }

            $invitation =  new Model_InvitationCode;
            $invitation->group_id = $group_id;
            $invitation->code = $invitation->generate_invitation_code(null);//generate hashcode(invitationcode) by date
            $invitation->type = $type;
            $invitation->cap = $limit;
            $invitation->creater_id = $user->user_id;
            $invitation->activated_num = 0;
            $invitation->expired_time = time()+ $time*60;//change miniutes to second
            $invitation->create_time = date("Y-m-d H:i:s");
            //var_dump($invitation);
            //strtotime
            $invitation->save();

            //前端数据
            $this->template_data['code'] =$invitation->code;


        }else{
            $this->flash_error(array(__('common.group_not_exist')));
        }

        $this->template_data['all_group_id'] = Model_Groups::find_all_groupid();

        if($this->isLeader()==false)
        	$this->action_index();

    }

    /**
    * 获取邀请码列表
    */
    public function action_list(){
        $user = $this->get_current_user();
        $result = array();
        $current_user_code = Model_InvitationCode::get_available_code($user->user_id);
        foreach ($current_user_code as $item) {
            $content = array(
                'code' => $item->code, 
                'group_id' => $item->group_id, 
                'cap' => $item->cap, 
                'type' => $item->type, 
                'create_time' => $item->create_time);

            array_push($result, $content);
        }
        //$result = $current_user_code;
        $this->response->body(json_encode($result));
    }
}






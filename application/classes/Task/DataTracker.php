<?php defined('SYSPATH') or die('No direct script access.');

/**
* 定时job: 数据统计相关任务
**/
class Task_DataTracker {
    /**
     * 提交题目正确后，更新用户分数
     */
    public static function count_daily_progress(){
        //get message from solution
        // $result = Model_Situation::oneday_message_from_solution();
        //
        $last_day_date = date('Y-m-d',strtotime("yesterday"));
        // $last_day_date = date('Y-m-d');
        self::get_user_progress_by_day($last_day_date);
    }

    /**
     * 统计某一天，所有用户的做题进度
     */
    private static function get_user_progress_by_day($day){
        //缓存 
        $user_scores = array();//用户分数累增缓存
        $user_cache= array();//用户id条目缓存
        $problem_cache = array();//题目缓存
        $config_cache = array();//组配置缓存

        $page_limit = 50;//查询单页数量
        $page = 1;
        $ac_problems = Model_Solution::get_daily_accepted_problem($day,$page,$page_limit);
        var_dump('================================');
        /**
        *分页计算提交成功的题
        */
        while (count($ac_problems) > 0) {//按页遍历
            //var_dump('page:'.$page);
            foreach ($ac_problems as $p) {//一页solution
                //判断是否为第一次提交通过
                if(!Model_Solution::is_problem_accepted_before_day($p)){
                    if(!array_key_exists($p->user_id,$user_cache)){//加入缓存
                        $u = Model_User::find_by_id($p->user_id);
                        if($u->is_admin())//管理员不参与统计
                            continue;
                        $user_cache[$p->user_id] = $u;
                    }
                    $user = $user_cache[$p->user_id];

                    if (!array_key_exists($p->problem_id,$problem_cache)) {//加入缓存
                        $problem_cache[$p->problem_id] = Model_Problem::find_by_id($p->problem_id);
                    }
                    $problem = $problem_cache[$p->problem_id];
                    if (isset($problem)==false){//题id已经无效
                        continue;
                    }
                    if (!array_key_exists($user->group_id,$config_cache)) {//加入缓存
                        $config_cache[$user->group_id] = Model_GroupConfig::find_by_id($user->group_id);
                    }
                    $config = $config_cache[$user->group_id];
                    $level_score = json_decode($config->level_score,true);
                    //var_dump($problem);
                    //加入题目分数
                    $user_scores[$user->user_id] = 
                        array_key_exists($user->user_id,$user_scores) ?
                        (int)$user_scores[$user->user_id] + (int)$level_score[$problem->level] : 
                        (int)$level_score[$problem->level];
                    
                }
            }
            //循环递增内容
            $page = $page + 1;
            $ac_problems = Model_Solution::get_daily_accepted_problem($day,$page,$page_limit);
        }
        /**
        *综合统计每天的进度
        */
        foreach ($user_scores as $user_id => $score) {
            //获取上一天的记录
            $prev_situation = Model_Situation::get_current_progress($day,$user_id);
            $situation = new Model_Situation;
            
            $situation->user_id = $user_id;
            $situation->date = date("Y-m-d 00:00:00",strtotime("$day"));
            $situation->submit = $prev_situation == null ? count(Model_Solution::get_daily_committed_problem($day,$user_id)) : $prev_situation->submit + count(Model_Solution::get_daily_committed_problem($day,$user_id));
            $situation->score = $prev_situation == null ? $score : $prev_situation->score + $score ;
            $situation->stage = $user->stage;
            $situation->during_time = json_encode(array());
            // $situation->during_time = unserialize($situation->during_time);
            // $situation->defunct = "N";
            $situation->save();
        }
        var_dump('finish');
    }
    /**
    * 统计所有用户的做题进度
    */
    public static function init_all_user_progress(){
        var_dump('init_all_user_progress');
        $day = Model_Solution::get_first_day_commit();
        if ($day==null) {
            return;
        }

        while (strtotime($day)<strtotime("now")) {
            var_dump($day);
            self::get_user_progress_by_day($day);
            //循环递增内容
            $day = date("Y-m-d h:i:s", strtotime("$day +1 day"));
        }
    }

}

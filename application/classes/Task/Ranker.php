<?php defined('SYSPATH') or die('No direct script access.');

/**
* 定时job: 计算新提交的分数
**/
class Task_Ranker {

    /**
    * 提交题目正确后，更新用户分数
    * 
    */
    public static function update_user_score(){
//     	DB::select()->from('table_name')->join('table_2')->on('table_2.table_id', '=', 'table_name.id');
// SELECT * FROM `table_name` JOIN `table_2` ON `table_2`.`table_id` = `table_name`.`id`
        $ac_problems = Model_TempAC::find(array(),null,null,array());
        foreach ($ac_problems as $ac) {
        	if(Model_Solution::number_of_solution_accept_for_user_and_problem($ac->user_id,$ac->problem_id)==0){
				$user = Model_User::find_by_username($ac->user_id);
				$problem = Model_Problem::find_by_id($ac->problem_id);

				$config = Model_GroupConfig::find_by_id($user->group_id);
                $scores = json_decode($config->level_score);
                //var_dump($scores->{$problem->level});
                // var_dump($problem->level);
				$user->score = $user->score + $scores->{$problem->level};
			    $user->save();
        	}
        	$ac->destroy();
        }
    }

}
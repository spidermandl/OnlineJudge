<?php

/**
 * @author: zhang ze xiang
 * Date: 4/11/2016
 * Time: 11:59 AM
 * 用户题目生成表
 CREATE TABLE IF NOT EXISTS `users_problem` (
  `user_problem_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(48) NOT NULL,
  `stage` int(4) ,
  `problem_set` text CHARACTER SET utf8,
  `pending1` text CHARACTER SET utf8,
  `pending2` text CHARACTER SET utf8,
  `pending3` text CHARACTER SET utf8,
   PRIMARY KEY (`user_problem_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 */

class Model_UsersProblem extends Model_Base
{
    static $cols = array(
        'user_problem_id',
        'user_id',
        'problem_set',
        'stage',
    );

    static $primary_key = 'problem_status_id';

    static $table = 'users_problem';
    
    public $user_problem_id;
    public $user_id;
    public $problem_set;//json 字符串
    public $stage;


    /*
      author: zhang zexiang
      funtion: get current stage --> problem level
      date: 2016.11.5 14:45
     */
    public static function find_problem_id_by_stage($user_id, $current_user_stage){

        $query = DB::select('problem_set')->from(static::$table)
            ->where('user_id', '=', $user_id)
            ->where('stage', '=', $current_user_stage);

        $obj = $query->as_object(get_called_class())->execute()->current();
        return $obj == NULL ? array() : json_decode($obj->problem_set);
    }
    
    /**
    * 获取用户所有已生成的题目
    */
    public static function find_current_all_problem_id($user_id){

        $query = DB::select('problem_set')->from(static::$table)
            ->where('user_id', '=', $user_id);
        
        $problems = $query->as_object(get_called_class())->execute()->as_array();
        $result = array();
        foreach ($problems as $p) {
            $list = json_decode($p->problem_set);
            foreach ($list as $id) {
                array_push($result, $id);
            }
        }

        return $result;
    }


    protected function initial_data(){

    }

    public function validate(){

    }
}
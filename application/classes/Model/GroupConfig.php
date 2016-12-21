<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * 小组题目相关配置表
 *
 * @author Desmond
 */

class Model_GroupConfig extends Model_Base
{
    static $cols = array(
        'group_id',
        'stage_num',//总共阶段数量
        'stage_level',
        'level_score',
        'pass_num',//升阶需要做出题的数量
        'show_num',//阶段出题数量
    );



    static $primary_key = 'group_id';

    static $table = 'group_config';

    public $group_id;
    public $stage_num;
    public $stage_level;
    public $level_score;
    public $pass_num;
    public $show_num;


    /**
    * 获取每个阶段需要完成的题数
    */
    public function min_pass_num_by_stage($stage){
        $pass_config = json_decode($this->pass_num,true);
        return $pass_config[$stage];
    }

    public function initial_data(){

    }

    public function validate(){

    }
}

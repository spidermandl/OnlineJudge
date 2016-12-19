<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 管理员查看数据界面
 * author Desmond
 */
abstract class Controller_Common_Group extends Controller_Common_Base{

    /*
	 * author : zhang zexiang
	 * function : group status graph
	 * data : 2016.11.15
     */
    public function action_status (){
        $group_id = NULL;
    	if (!$this->isLeader()) {
        	$this->view = 'admin/situation/testSubmited';
            $group_id = Arr::get($_GET,'id');
    	}else{
            $leader = $this->get_current_user();
            $group_id = $leader['group_id'];
        }
        $date = Arr::get($_GET,'date');

        $this->template_data['id'] = $group_id;
        $this->template_data['date'] = $date;
        $this->template_data['title'] = __('ddd');

        $group_config = Model_GroupConfig::find_by_id($group_id);
        if($group_id==null || $group_config==null){
            return 0;
        }

        $this->template_data['group_config_stages'] = $group_config->stage_num;

        /*$date 只包含年 月信息
         *需要查出整月数据
         *该部分逻辑需要重构
         */
        $result = Model_Situation::get_group_stage_progress_by_date($date,$group_id);
        $this->template_data['result'] = $result;

        $alldata = array();
        foreach ($result as $key) {
            $time = date("Y-m-d",strtotime($key->date));

            if (array_key_exists($time, $alldata)) {
                $oldstage = $alldata[$time];

                if(array_key_exists($key->stage, $oldstage)){
                    $oldstage[$key->stage] = $oldstage[$key->stage]+1;
                }else{
                    $oldstage[$key->stage] = 1;
                }
                ksort($oldstage);
                $alldata[$time] = $oldstage;
            }else{
                $alldata[$time] = array($key->stage => 1);
            }
        }
        $alldata["stage_num"] =  $group_config->stage_num;
        $this->response->body(json_encode($alldata));
        
		if (!$this->isLeader()) {
        	$this->template_data['result'] = $result;
    	}
    }
}
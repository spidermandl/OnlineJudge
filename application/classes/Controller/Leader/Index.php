<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_Index extends Controller_Common_Index{

    /**
    * 根路径，系统管理员和组管理员不同
    */
    protected function rootPath(){
        return 'leader';
    }
    /**
    * 根路径，系统管理员和组管理员不同
    */
    protected function isLeader(){
        return true;
    }

    public function action_index()
    {
        $this->template_data['title'] = __('admin.index.index.dashboard');
    }

}

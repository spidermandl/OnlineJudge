<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Leader_User extends Controller_Leader_Base{

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
    
    /*
    user list of leader's group
    */
    public function action_list()
    {
        $page = $this->get_query('page', 1);

        $leader = $this->get_current_user();

        $filter = array(
            'group_id' => $leader['group_id'],
            );

    	$user_list = Model_User::find($filter, $page);

        $total = $this->template_data['total'] = Model_User::count();
        $this->template_data['total_page'] = ceil($total / OJ::per_page);
        $this->template_data['user_list'] = $user_list;
        $this->template_data['title']  = __('admin.user.list.user_list');
    }



}

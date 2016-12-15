<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_User extends Controller_Common_User{
    /**
    * 根路径，系统管理员和组管理员不同
    */
    protected function rootPath(){
        return 'admin';
    }
    /**
    * 根路径，系统管理员和组管理员不同
    */
    protected function isLeader(){
        return false;
    }
    
    public function action_list()
    {
        $page = $this->get_query('page', 1);
        $group = $this->get_query('id',null);

        $filter = array(
            'group_id' => $group,
            );
        $filter = $this->clear_data($filter,  array(-1, '', null));
    	$user_list = Model_User::find($filter, $page);

        $total = $this->template_data['total'] = Model_User::count();
        $this->template_data['total_page'] = ceil($total / OJ::per_page);
        $this->template_data['user_list'] = $user_list;
        $this->template_data['title']  = $group;
    }


    
}

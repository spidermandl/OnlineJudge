<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Index extends Controller_Common_Index
{
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

    public function action_index()
    {
        $this->template_data['title'] = __('admin.index.index.dashboard');

        $user = $this->get_current_user();

        //show all group id
        $this->template_data['all_group_id'] = Model_Groups::find_all_groupid();
        /**
         *  获取邀请码功能
         */
        $this->template_data['allcode'] = Model_InvitationCode::get_user_code($user->user_id);
    }

}

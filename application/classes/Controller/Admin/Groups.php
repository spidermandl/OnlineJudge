<?php defined('SYSPATH') or die('No direct script access.');

/*
作者：wenkang
create group
group list
*/
class Controller_Admin_Groups extends Controller_Common_Group{
    
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
    
    //组列表
    public function action_list(){
      // $page = $this->request->param('page', 1);
        $page = $this->get_query('page', 1);
        $orderby = array(
                    'group_id' => Model_Base::ORDER_ASC,
                  );

        $filter = array();
        $groups = Model_Groups::find($filter, $page, OJ::per_page, $orderby);
        $total = Model_Groups::count($filter);
        $this->template_data['title'] = __('admin.group.list.group_list');
        $this->template_data['groups'] = $groups;
        $this->template_data['page'] = $page;
        $this->template_data['total'] = $total;
        $this->template_data['total_page'] = ceil($total / OJ::per_page);
        $this->template_data['per_page'] = OJ::per_page;

    }

    public function action_index(){
    	  $this->template_data['title'] = __('New group');
        $this->view = 'admin/groups/list';
        $this->action_list();
    }

    /*
     * 新建组
     */
    public function action_create(){

    		$group_id = $_GET['id'];
        if ($group_id) {
            $group = Model_Groups::find_by_id($group_id);
            if (!$group) {
                $group =  new Model_Groups;
                $group->group_id = $group_id;

                $group->save();

            }else{
                $this->flash_error(array(__('common.group_exist')));
            }

        }else{
            $this->flash_error(array(__('common.groupname_null')));
        }

        $this->redirect('admin/groups/');

    }


    public function action_del(){
        // ban it forever, just mark it
        $user_id = $_GET['id'];

        $user = Model_Groups::find_by_id($user_id);
        $user->defunct = Model_User::DEFUNCT_YES;
        $user->save();

        //TODO: use ajax
        $this->action_index();
    }


}

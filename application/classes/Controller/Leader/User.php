<?php defined('SYSPATH') or die('No direct script access.');

// class Controller_Leader_User extends Controller_Leader_Base{
//     /**
//     * 根路径，系统管理员和组管理员不同
//     */
//     protected function rootPath(){
//         return 'leader';
//     }
//     /**
//     * 根路径，系统管理员和组管理员不同
//     */
//     protected function isLeader(){
//         return true;
//     }

//     public function action_list()
//     {
//         var_dump("expression");
//         $page = $this->get_query('page', 1);
//         $leader = $this->get_current_user();
//         $filter = array(
//             'group_id' => $leader['group_id'],
//             );
//     	$user_list = Model_User::find($filter, $page);

//         $total = $this->template_data['total'] = Model_User::count();
//         $this->template_data['total_page'] = ceil($total / OJ::per_page);
//         $this->template_data['user_list'] = $user_list;
//         $this->template_data['title']  = __('admin.user.list.user_list');
//     }



// }
class Controller_Leader_User extends Controller_Leader_Base{
    public function action_index()
    {
        $this->view = 'leader/user/list';
        $this->action_list();
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
    public function action_edit()
    {
        $user_id = $this->request->param('id', null);
        $user = Model_User::find_by_id($user_id);
        if ( !$user )
            throw new Exception_Page(__('common.user_not_found'));
        if ( $this->request->is_post() )
        {
            $safe_data = $this->cleaned_post();
            $password = $safe_data['password'];
            if ($password AND $safe_data['repassword'] == $password )
            {
                $user->update_password($password);
            }
            // strip password
            unset($safe_data['password']);
            unset($safe_data['repassword']);
            $user->set_permission($this->get_post('permission'));
            $user->update($safe_data);
            $user->save();
        }
        $this->template_data['user'] = $user;
        $this->template_data['title'] =
            __('admin.user.edit.edit_:user',
                array(':user' => $user_id));
    }
    public function action_del()
    {
        // ban it forever, just mark it
        $user_id = $this->request->param('id', null);
        $user = Model_User::find_by_id($user_id);
        $user->defunct = Model_User::DEFUNCT_YES;
        $user->save();
        //TODO: use ajax
        $this->action_index();
    }
    public function action_addscore()
    {
        // $this->view = 'admin/situation/testSubmited';
        $user = Arr::get($_GET,'user');
        $date = Arr::get($_GET,'date');
        $this->template_data['user'] = $user;
        $this->template_data['date'] = $date;
        // $date = strtotime($date);
        //get message from solution
        // $result = Model_Situation::oneday_message_from_solution();
        $order_by = array(
                'date' => Model_Base::ORDER_ASC
            );
        $result = Model_Situation::search($date,'date',$order_by,$show_all=true, 'user_id', $user);
        $this->template_data['result'] = $result;
        $alldata = array();
        foreach ($result as $key) {
            # code...
            array_push($alldata, json_encode(array("data"=>$key->date,"score"=>$key->score)));
        }
        $time=strtotime($date);
        $last= strtotime("-1 month", $time);
        $last_month_lastday = date("Y-m-t", $last);
        $last_month_date = Model_Situation::search($last_month_lastday,'date',$order_by,$show_all=true, 'user_id', $user);
        foreach ($last_month_date as $key ) {
            # code...
            array_push($alldata, json_encode(array("lastmonth"=>$key->score)));
        }
        $time=strtotime($date);
        $last= strtotime("-1 month", $time);
        $last_month_lastday = date("Y-m-t", $last);
        $last_month_date = Model_Situation::search($last_month_lastday,'date',$order_by,$show_all=true, 'user_id', $user);
        foreach ($last_month_date as $key ) {
            # code...
            array_push($alldata, json_encode(array("lastmonth"=>$key->score)));
        }
        $this->response->body(json_encode($alldata));
    }
    public function action_submited()
    {
        // $this->view = 'admin/situation/testSubmited';
        $user = Arr::get($_GET,'user');
        $date = Arr::get($_GET,'date');
        $this->template_data['user'] = $user;
        $this->template_data['date'] = $date;
         $title = __('ddd');
        $this->template_data['title'] = $title;
        $order_by = array(
                'date' => Model_Base::ORDER_ASC
            );
        $result = Model_Situation::search($date,'date',$order_by,$show_all=true, 'user_id', $user);
        $this->template_data['result'] = $result;
        $alldata = array();
        foreach ($result as $key) {
            # code...
            array_push($alldata, json_encode(array("data"=>$key->date,"submited"=>$key->submited,"during_time"=>$key->during_time)));
        }
        $this->response->body(json_encode($alldata));
    }
    public function action_form()
    {
        $this->view = 'leader/user/form';
        $user = Arr::get($_GET,'user');
        $this->template_data['title']  = $user;
    }
}

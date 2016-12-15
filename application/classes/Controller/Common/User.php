<?php defined('SYSPATH') or die('No direct script access.');

/**
* 管理员用户界面抽象控制器
*/
abstract class Controller_Common_User extends Controller_Common_Base{

    abstract public function action_list();

    public function action_index(){

        $this->view = $this->rootPath().'/user/list';
        $this->action_list();
    }

    /*
     * author : zhang zexiang
     * function :everyday submited numbers graph
     * date : 2016.11.10
     */
    public function action_submited(){
        $this->view = 'admin/situation/testSubmited';
        $user_id = Arr::get($_GET,'user');
        $date = Arr::get($_GET,'date');

        $this->template_data['user'] = $user_id;
        $this->template_data['date'] = $date;
        $this->template_data['title'] = __('ddd');

        $order_by = array(
                    'date' => Model_Base::ORDER_ASC
                );

        $result = Model_Situation::search($date,'date',$order_by,$show_all=true, 'user_id', $user_id);

        $this->template_data['result'] = $result;

        $alldata = array();

        foreach ($result as $key) {
            array_push($alldata,json_encode(
                                            array("data"=>$key->date,
                                                  "submited"=>$key->submit,
                                                  "during_time"=>$key->during_time)));
        }

        $this->response->body(json_encode($alldata));
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
        $this->template_data['title'] = __('admin.user.edit.edit_:user',
                                            array(':user' => $user_id));
    }

    public function action_del(){
        // ban it forever, just mark it
        $user_id = $this->request->param('id', null);

        $user = Model_User::find_by_id($user_id);
        $user->defunct = Model_User::DEFUNCT_YES;
        $user->save();

        //TODO: use ajax
        $this->action_index();
    }

    public function action_form()
    {
        $this->view = $this->rootPath().'/user/form';
        $user = Arr::get($_GET,'user');

        $this->template_data['title']  = $user;
    }

        //run per one day
    public function action_addscore()
    {
        if (!$this->isLeader()) {
            $this->view = 'admin/situation/testSubmited';
        }
        

        $user = Arr::get($_GET,'user');
        $date = Arr::get($_GET,'date');

        $this->template_data['user'] = $user;
        $this->template_data['date'] = $date;

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

        if ($this->isLeader()) {
            $time=strtotime($date);
            $last= strtotime("-1 month", $time);
            $last_month_lastday = date("Y-m-t", $last);
            $last_month_date = Model_Situation::search($last_month_lastday,'date',$order_by,$show_all=true, 'user_id', $user);

            foreach ($last_month_date as $key ) {
                array_push($alldata, json_encode(array("lastmonth"=>$key->score)));
            }
        }

        $this->response->body(json_encode($alldata));

    }


}






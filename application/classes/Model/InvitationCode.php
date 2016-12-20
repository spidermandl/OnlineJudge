<?php


/**
 * @author: freefcw
 * 邀请码数据表
 * Date: 12/28/13
 * Time: 2:17 PM

 CREATE TABLE IF NOT EXISTS `invitation_code` (
  `invitation_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` varchar(48) NOT NULL,
  `type` int(4) ,
  `cap` int(11) ,
  `creater_id` varchar(48) NOT NULL,
  `create_time` datetime NOT NULL ,
  `activated_num` int(11),
  `expired_time` int(20) NOT NULL,
  `code` varchar(20) NOT NULL,
  `pending1` text CHARACTER SET utf8,
  `pending2` text CHARACTER SET utf8,
  `pending3` text CHARACTER SET utf8,
   PRIMARY KEY (`invitation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

 */

class Model_InvitationCode extends Model_Base{

    static $cols = array(
        'invitation_id',
        'group_id',
        'type',
        'cap',
        'creater_id',
        'create_time',
        'activated_num',
        'expired_time',
        'code',
    );

    static $primary_key = 'invitation_id'; //邀请码表主键

    static $table = 'invitation_code';

    public $invitation_id;
    public $group_id;
    public $type;
    public $cap;
    public $creater_id;
    public $create_time;
    public $activated_num;
    public $expired_time;
    public $code;

    /*
     *anthod: zhang ze xiang
     *function : 生成邀请码
     *date: 2016.10.31 13:02
     */
    public function generate_invitation_code($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        if($length == null)
            $length = 6;
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public static function get_Group_id($invitation)
    {
        $filter = array(
            'code' => $invitation,
        );
        $result = self::find($filter);
        if ($result) 
            return $result[0];
        return null;
    }
    

    /**
     * 获取用户生成过的邀请码
    */
    public static function get_user_code($user_id){
        $query = DB::select('code')->from(static::$table)
            ->where('creater_id', '=', $user_id);

        $result = $query->execute();
        return $result -> as_array();
    }
    
    /**
    * 验证邀请码
    * 返回 Model_InvitationCode 对象
    */
    public static function validateCode($code){
        $query = DB::select()
            ->from(static::$table)
            ->where('code', '=', $code);
        $array = $query->as_object(get_called_class())->execute()->as_array();
        if (count($array) == 0) //没有该注册码
            return null;
        $item = $array[0];
        if ($item->expired_time < time()){ //注册码过期
            $item->destroy();
            return null;
        }
        $item->activated_num = $item->activated_num+1;
        if ($item->activated_num == $item->cap) {//注册码达到使用上限
            $item->destroy();
        }else
            $item->save();

        return $item;
    }

    /**
    * 保存邀请码
    */
    public function save(){
        // prepare data
//        $this->data['update_at'] = PP::format_time();

        //获取表结构数据元
        $data = $this->raw_array();

        if ( isset($this->{static::$primary_key}) and $this->{static::$primary_key}){
            // if primary key exist, then update, contain primary key, haha
            $primary_id = $this->{static::$primary_key};
            //unset($this->data[static::$primary_key]);

            $query = DB::update(static::$table)->set($data)->where(static::$primary_key, '=', $primary_id);
            $ret   = $query->execute();

            return $ret;

        } else{
            // else save new record
            $keys   = array_keys($data);
            $values = array_values($data);

            list($id, $affect_row) = DB::insert(static::$table, $keys)->values($values)->execute();

            $this->{static::$primary_key} = $id;

            return $affect_row;
        }
    }

    protected function initial_data(){

    }

    public function validate(){
    }

    /**
    * 获取有效邀请码
    */
    public static function get_available_code($user_id){
        /**
        * 删除过期邀请码
        */
        $query = DB::delete(static::$table)
            ->where('expired_time', '<', time())->execute();

        $query = DB::select('code','group_id','cap','type','create_time')
            ->from(static::$table)
            ->where('creater_id', '=', $user_id);
        $result = $query->as_object(get_called_class())->execute();
        return $result->as_array();

    }


}

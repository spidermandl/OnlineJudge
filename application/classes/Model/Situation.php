 <?php
/**
 * 用户进度表，记录用户每天做题的变化
 *
 * @author freefcw

  CREATE TABLE IF NOT EXISTS `user_progress` (
  `progress_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(48) NOT NULL,
  `stage` int(4) ,
  `date` datetime NOT NULL ,
  `submit` int(11),
  `score` int(11) NOT NULL,
  `during_time` text CHARACTER SET utf8,
  `pending1` text CHARACTER SET utf8,
  `pending2` text CHARACTER SET utf8,
  `pending3` text CHARACTER SET utf8,
   PRIMARY KEY (`progress_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 */
class Model_Situation extends Model_Base
{
    static $cols = array(
        'progress_id',
        'user_id',
        'date',
        'submit',//提交数量
        'score',//提交分数
        'stage',//所处阶段
        'during_time',
    );

//!!!!!!!!!!!!!  when change "ddd"(not same of $cols), it's could save new data, but change the same , it's not to save new , but could show list , and this function not use show list , so just soso
    static $primary_key = 'progress_id';
    static $table = 'user_progress';

    public $progress_id;
    public $user_id;
    public $date;
    public $submited;
    public $score;
    public $stage;
    public $during_time;


    public function save(){
        // prepare data
        //        $this->data['update_at'] = PP::format_time();
        // 过滤不存在的数据
        $data = $this->raw_array();

        // else save new record
        $keys   = array_keys($data);
        $values = array_values($data);

        $query  = DB::insert(static::$table, $keys)->values($values);

        $query->execute();
    }



    public static function get_oneday_userdetail($user_id){
        return Model_User::find_by_username($user_id);
    }


    public static function get_oneday_userid($result)
    {
        $user_id_array=array();
        $user_id_date = array();
        foreach ($result as $line) {
            array_push($user_id_array, $line->user_id);
            // array_push($user_id_date, $line->user_id);
        }
        $user_id_array = array_unique($user_id_array);
        // return $user_id_date;
        // return $user_id_array;
        $n = 0;
        foreach ($result as $each_line) {
            $n += 1;
            foreach ($user_id_array as $key) {
                if($each_line->user_id == $key){
                    if(array_key_exists($key, $user_id_date)){
                        array_push($user_id_date[$key],date('H:i',strtotime($each_line->in_date)));
                    }else{
                        $user_id_date[$key] = array(date('H:i',strtotime($each_line->in_date)));
                    }
                }
            }
        }
        return array($user_id_date,$user_id_array);
    }

    public static function inject($text, $area, $orderby = array(), $show_all=false){
        $term = "%{$text}%";
        $query = DB::select()->from('solution')
            ->where($area, 'LIKE', $term)
            ->limit(100);

        foreach($orderby as $key => $order){
            $query->order_by($key, $order);
        }

        if (!$show_all)
            $query->where('defunct', '=', self::DEFUNCT_NO);

        $ret = $query->as_object(get_called_class())->execute();

        return $ret->as_array();
    }


    /**
     * @param       $text
     * @param       $area
     * @param array $orderby
     * @param bool  $show_all
     *
     * @return Model_Problem[]
     */
    public static function search($text, $area, $orderby = array(), $show_all=false, $left, $right)
    {
        $term = "%{$text}%";
        $query = DB::select()->from(self::$table)
            ->where($area, 'LIKE', $term)
            ->where($left, '=' , $right);
            
        foreach($orderby as $key => $order)
        {
            $query->order_by($key, $order);
        }

        if (!$show_all )
            $query->where('defunct', '=', self::DEFUNCT_NO);

        $ret = $query->as_object(get_called_class())->execute();

        return $ret->as_array();
    }

    protected function initial_data(){
        $this->in_date = e::format_time();
    }

    public function validate(){

    }

    /**
    * 获取用户当前进度
    */
    public static function get_current_progress($day, $user_id){

        $result = DB::select()->from(static::$table)
            ->where('date', '<', date("Y-m-d 00:00:00",strtotime("$day")))
            ->where('user_id', '=' , $user_id)
            ->order_by('date',Model_Base::ORDER_DESC)
            ->limit(1)
            ->as_object(get_called_class())->execute();
        return count($result)==0 ? NULL : $result->current();

    }

    public static function user_day_data($date, $user_id){

        // $term = "%{$date}%";
        // $query = DB::select()->from('users_status')
        //     ->where('date', '=', $date)
        //     ->where('user_id', '=' , $user_id);

        // $ret = $query->as_object(get_called_class())->execute();

        $result = DB::select()->from(static::$table)->where('date', '=', $date)->where('user_id', '=' , $user_id)->as_object(get_called_class())->execute();
        return $result->current();

    }

    public static function dd ($array){

        $query = DB::delete(static::$table);

        foreach($array as $col => $val)
        {
            $query->where($col, '=', $val);
        }
        return $query->execute();
    }
}

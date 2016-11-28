<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 * all functions about contest
 *
 * @author freefcw
 */

class Model_GroupConfig extends Model_Base
{
    static $cols = array(
        'group_id',
        'stage_num',
        'stage_level',
        'level_score',
        'pass_num',
        'show_num',

    );



    static $primary_key = 'group_id';

    static $table = 'group_config';

    public $group_id;
    public $stage_num;
    public $stage_level;
    public $level_score;
    public $pass_num;
    public $show_num;


    public static function search($text, $area, $orderby = array(), $show_all=false)
    {
        $term = "%{$text}%";
        $query = DB::select()->from(self::$table)
            ->where($area, 'LIKE', $term)
            ->limit(100);

        foreach($orderby as $key => $order)
        {
            $query->order_by($key, $order);
        }

/*        if ( ! $show_all )
            $query->where('defunct', '=', self::DEFUNCT_NO);*/

        $ret = $query->as_object(get_called_class())->execute();

        return $ret->as_array();
    }


    /**
     * @param string $id
     *
     * @return Model_Contest
     */
    public static function find_by_id($id)
    {
        return parent::find_by_id($id);
    }



    /**
     * 保存当前实例到数据库
     *
     * @return int
     */
    public function save()
    {
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

    /**
     * 题目列表
     *
     * @param int $num 如果不为null则为第 $num 个题目
     *
     * @return Model_Problem|Model_CPRelation[]
     */
    public function problem($num = NULL)
    {
        if ( is_null($this->problem_list) )
        {
            $this->problem_list = Model_CPRelation::problems_for_contest($this->contest_id);
        }
        if ( is_null($num)  )
            return $this->problem_list;

        $relation = $this->problem_list[$num];
        return $relation->real_problem();
    }

    /**
     * 题目数量
     *
     * @return int
     */
    public function number_of_problems()
    {
        return count($this->problem());
    }

    /**
     *
     * @param Model_User $user
     *
     * @return bool
     */
    public function can_user_access($user)
    {
        // if contest if public is ok
        if ( $this->is_public() ) return true;

        // or user must login before try to access the contest
        if ( ! $user ) return false;
        if ( $user->is_admin() ) return true;
        $permission = 'c'. $this->contest_id;
        if ( $user->has_permission($permission) ) return true;

        return false;
    }

    /**
     * is contest opened
     * @return bool
     */
    public function is_open()
    {
        $now = time();
//        if ( $now > strtotime($this->start_time)  AND $now < strtotime($this->end_time) )
        if ( $now > strtotime($this->start_time) )
            return true;
        return false;
    }

    public function statistics()
    {
        $solutions = $this->solutions();

        $data = array();
        $lang = array();
        for($index = 0; $index < $this->number_of_problems(); $index++ )
        {
            $data[$index] = array();
            $lang[$index] = array();
            foreach( OJ::$result as $key => $display)
                $data[$index][$key] = 0;
//            $data[$pnum] = 0;
            foreach( OJ::$language as $key => $display)
            {
                $lang[$index][$key] = 0;
            }
            $lang[$index]['total'] = 0;
        }

      $number_of_problem = $this->number_of_problems();
        foreach($solutions as $item)
        {
          // add check for contest problem will delete after contest
          // TODO: change the relation of item->num and problem
          if ( $item->num < $number_of_problem and $item->result >= 4 and $item->result <= 11 )
          {
            $data[$item->num][$item->result]++;
            $lang[$item->num][$item->language]++;
          }
        }

        foreach( OJ::$result as $key => $display)
        {
            $data['total'][$key] = 0;
            for($index = 0; $index < $this->number_of_problems(); $index++ )
            {
                $data['total'][$key] += $data[$index][$key];
            }
        }

        foreach( OJ::$language as $key => $display)
        {
            $lang['total'][$key] = 0;
            for($index = 0; $index < $this->number_of_problems(); $index++ )
            {
                $lang['total'][$key] += $lang[$index][$key];
            }
        }

        return array('result' => $data, 'language'=>$lang);
    }

    public function solutions()
    {
        return Model_Solution::find_solution_for_contest($this->contest_id, $this->start_time, $this->end_time);
    }

    public function standing()
    {
        $solutions = $this->solutions();

        /* @var $data Model_Team[] */
        $data = array();
        $start_time = strtotime($this->start_time);
        foreach($solutions as $item)
        {
            if(array_key_exists($item->user_id, $data))
            {
                $team = $data[$item->user_id];
                $team->add($item->num, strtotime($item->in_date) - $start_time, $item->result);
            } else {
                $team = new Model_Team();
                $team->user_id = $item->user_id;
                $team->add($item->num, strtotime($item->in_date) - $start_time, $item->result);
                $data[$item->user_id] = $team;
            }
        }
        usort($data, function($a, $b){
            if ($a->solved > $b->solved)
                return false;
            if ($a->solved == $b->solved) {
                if ($a->time < $b->time) return false;
            };
            return true;
        });
        return $data;
    }

    public function arrange_problem($orderlist)
    {
        Model_CPRelation::empty_contest($this->contest_id);
        $plist = explode(';', $orderlist);
        foreach($plist as $item)
        {
            if ( $item == '') continue;
            list($num, $problem_id) = explode(':', $item);

            $cr = new Model_CPRelation;
            $cr->contest_id = $this->contest_id;
            $cr->problem_id = $problem_id;
            $cr->num = $num;
            $cr->save();
        }
    }

    /**
     * 获取私有比赛的用户
     *
     * @return array
     */
    public function members()
    {
        return Model_Privilege::member_of_contest($this->contest_id);
    }

    public function is_private()
    {
        return intval($this->private) == 1;
    }

    public function is_public()
    {
        return ! $this->is_private();
    }

    /**
     * @param $user_list
     *
     * @return void
     */
    public function add_member($user_list)
    {
        // TODO: check user
        foreach($user_list as $user_id)
        {
            $perm = new Model_Privilege;
            $perm->user_id = $user_id;
            $perm->rightstr = 'c'.$this->contest_id;
            $perm->save();
        }
    }

    /**
     * @param $user_id
     */
    public function remove_member($user_id)
    {
        $filter = array(
            'user_id' => $user_id,
            'rightstr' => 'c'.$this->contest_id,
        );
        $perm = Model_Privilege::find($filter);

        foreach($perm as $item)
        {
            $item->defunct = 1;
            $item->destroy();
        }
    }

    public function initial_data()
    {
        $this->title       = '';
        $this->start_time  = '';
        $this->end_time    = '';
        $this->defunct     = self::DEFUNCT_NO;
        $this->description = '';
        $this->private     = 1;
    }

    public function validate()
    {}
}

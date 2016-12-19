<?php

/**
 * User: freefcw
 * Date: 12-1-10
 * Time: 上午1:16
 */
class Model_Solution extends Model_Base
{
    static $table = 'solution';
    static $primary_key = 'solution_id';

    const STATUS_PENDING         = 0;
    const STATUS_PENDING_REJUDGE = 1;
    const STATUS_COMPLIE         = 2;
    const STATUS_REJUDGING       = 3;
    const STATUS_AC              = 4;
    const STATUS_PE              = 5;
    const STATUS_WA              = 6;
    const STATUS_TLE             = 7;
    const STATUS_MLE             = 8;
    const STATUS_OLE             = 9;
    const STATUS_RE              = 10;
    const STATUS_CE              = 11;
    const STATUS_COMPILE_OK      = 12;
    const STATUS_TEST_RUN        = 13;

    public static $status = array(
            4  => "Accepted",
            5  => "Presentation Error",
            6  => "Wrong Answer",
            7  => "Time Limit Exceed",
            8  => "Memory Limit Exceed",
            9  => "Output Limit Exceed",
            10 => "Runtime Error",
            11 => "Compile Error",
            12 => "Compile OK",
            13 => "Test Running Done",
            0  => "Pending",
            1  => "Pending Rejudging",
            2  => "Compiling",
            3  => "Running &amp; Judging"
        );

    static $cols = array(
        'solution_id',
        'problem_id',
        'user_id',
        'time',
        'memory',
        'in_date',
        'result',
        'language',
        'ip',
        'contest_id',
        'valid',
        'num',
        'code_length',
        'judgetime',
        'pass_rate',
    );

    public $solution_id;
    public $problem_id;
    public $user_id;
    public $time;
    public $memory;
    public $in_date;
    public $result;
    public $language;
    public $ip;
    public $contest_id = null;
    public $valid;
    public $num;
    public $code_length;
    public $judgetime;
    public $pass_rate;

    /* @var Model_Code */
    protected $code = null;


    /**
     * @param string $id
     *
     * @return Model_Solution
     */
    public static function find_by_id($id)
    {
        return parent::find_by_id($id);
    }

    public static function summary_for_problem($problem_id)
    {
        $filter = array(
            'problem_id' => $problem_id,
        );
        $data = array();
        $data['total'] = self::count($filter);
        $data['submit_user'] = self::count_distinct_user($filter);

        $filter['result'] = self::STATUS_AC;
        $data['ac_user'] = self::count_distinct_user($filter);

        $data['more'] = array();
        $status = array(
            self::STATUS_AC,
            self::STATUS_PE,
            self::STATUS_WA,
            self::STATUS_TLE,
            self::STATUS_MLE,
            self::STATUS_OLE,
            self::STATUS_RE,
            self::STATUS_CE,
        );
        foreach($status as $st)
        {
            $filter['result'] = $st;
            $data['more'][$st] = self::count($filter);
        }
        return $data;
    }

    protected static function count_distinct_user($filter)
    {
        $query = DB::select(DB::expr('count(distinct(`user_id`)) as total'))->from(self::$table);
        foreach($filter as $k => $v)
        {
            $query->where($k, '=', $v);
        }

        $result = $query->execute();
        $result = $result->current();
        return $result['total'];
    }

    /**
     * @param Model_User $user
     * @param Model_Problem $problem
     * @param int $language
     * @param string $source_code
     *
     * @return Model_Solution
     */
    public static function create($user, $problem, $language, $source_code)
    {
        $solution = new Model_Solution();
        $solution->user_id = $user->user_id;
        $solution->problem_id = $problem->problem_id;
        $solution->language = $language;
        $solution->ip = Request::$client_ip;

        $solution->set_source_code($source_code);

        $problem->have_new_solution();
        $user->take_new_submit();

        return $solution;
    }

    public function set_source_code($source_code)
    {
        $this->code_length = strlen($source_code);

        $code = new Model_Code;
        $code->source = $source_code;

        $this->code = $code;
    }

    public static function number_of_problem_accept_for_user($user_id)
    {
        $query = DB::select(DB::expr('count(distinct(problem_id)) as total'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('result', '=', self::STATUS_AC);

        $result = $query->execute()->current();

        return $result['total'];
    }

    public static function ids_of_problem_accept_for_user($user_id)
    {
        $query = DB::select(DB::expr('DISTINCT problem_id'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('result', '=', self::STATUS_AC);

        $result = $query->as_object(get_called_class())->execute();

        return $result->as_array();
    }

    public static function number_of_solution_accept_for_user($user_id)
    {
        $query = DB::select(DB::expr('count(solution_id) as total'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('result', '=', self::STATUS_AC);

        $result = $query->execute()->current();

        return $result['total'];
    }

    public static function number_of_solution_total_for_user($user_id)
    {
        $query = DB::select(DB::expr('count(solution_id) as total'))->from(self::$table)
            ->where('user_id', '=', $user_id);
        $result = $query->execute()->current();
        return $result['total'];
    }

    public static function number_of_solution_accept_for_user_and_problem($user_id,$problem_id)
    {
        $query = DB::select(DB::expr('count(solution_id) as total'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('problem_id','=',$problem_id)
            ->where('result', '=', self::STATUS_AC);

        $result = $query->execute()->current();
        return $result['total'];
    }

    public static function number_of_solution_failed_for_user($user_id)
    {
        $query = DB::select(DB::expr('count(solution_id) as total'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('result', '!=', self::STATUS_AC);

        $result = $query->execute()->current();

        return $result['total'];
    }

    /**
     * 获取指定一天里提交的题目
     * @param day 指定天
     * @param day 页数
     * @param day 每页数量
     */
    public static function get_daily_committed_problem($day,$user_id){
        $query = DB::select()->from(self::$table)
            ->where('in_date', '>=', date("Y-m-d 00:00:00",strtotime("$day")))
            ->where('in_date', '<', date("Y-m-d 00:00:00",strtotime("$day +1 day")))
            ->where('user_id','=',$user_id);
        $result = $query->as_object(get_called_class())->execute();
        return $result->as_array();
    }

    /**
     * 分页获取指定一天里提交通过的题目
     * @param day 指定天
     * @param page 页数
     * @param page_limit 每页数量上限
     */
    public static function get_daily_accepted_problem($day,$page=1,$page_limit=50){
        $query = DB::select()->from(self::$table)
            ->where('result','=',self::STATUS_AC)
            ->where('in_date', '>=', date("Y-m-d 00:00:00",strtotime("$day")))
            ->where('in_date', '<', date("Y-m-d 00:00:00",strtotime("$day +1 day")))
            ->order_by('in_date',Model_Base::ORDER_ASC)
            ->limit($page_limit);
        $query->offset( $page_limit * ($page - 1));
        $result = $query->as_object(get_called_class())->execute();
        return $result->as_array();
    }

    /**
     * 获取第一条做题提交的时间
     */
    public static function get_first_day_commit(){
        $order_by = array('in_date' => Model_Base::ORDER_ASC );
        $first = Model_Solution::find(array(),NULL,1,$order_by);
        if (count($first) == 0) {
            return NULL;
        }
        return $first[0]->in_date;
    }

    /**
    * 判断该题之前是否正确提交过
    * @param solution 页数
    */
    public static function is_problem_accepted_before_day($solution){
        $query = DB::select()->from(self::$table)
            ->where('in_date', '<', $solution->in_date)
            ->where('problem_id', '=', $solution->problem_id)
            ->where('user_id', '=', $solution->user_id)
            ->where('result','=',self::STATUS_AC)
            ->limit(1);
        $result = $query->as_object(get_called_class())->execute();
        if (count($result)>0)
            return true;
        return false;
    }


    public function display_result()
    {
        return __(e::jresult($this->result));
    }

    public function display_language()
    {
        return e::lang($this->language);
    }

    public function display_pass_rate()
    {
        return ($this->pass_rate > .98 ? 1 : $this->pass_rate) * 100;
        // for legacy reason, in Google Code version,
        // accepted will be recorded about .99
    }

    /**
     * @param Model_User|string $user
     *
     * @return bool
     */
    public function allow_view_code($user)
    {
        if (is_string($user))
        {
            $user = Model_User::find_by_id($user);
        }
        //if ( $user->user_id == $this->user_id ) return true;
        if ( $user->can_view_code($this) ) return true;

        return false;
    }

    /**
     * the source code of solution
     *
     * @return string|null
     */
    public function source()
    {
        return Model_Code::for_solution($this);
    }

    /**
     * @param     $problem_id
     * @param int $page
     * @param int $limit
     *
     * @return array
     */
    public static function solution_by_rank($current_group,$problem_id, $page=0, $limit=50)
    {
        $start = $page * $limit;
        if (!$current_group) {
            $sql = 'SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution 
                WHERE result = :status
                AND problem_id = :problem_id
                GROUP BY solution_id,user_id
                ORDER BY score, in_date
                LIMIT :start, :limit';
            $query = DB::query(Database::SELECT, $sql)
            ->param(':status', self::STATUS_AC)
            ->param(':problem_id', $problem_id)
            ->param(':start', $start)
            ->param(':limit', $limit);
        }
        else{
            $sql = 'SELECT solution_id, problem_id, count(*) AS att, user_id, language, memory, time, min(10000000000000000000 + time * 100000000000 + memory * 100000 + code_length) AS score, in_date
                FROM solution
                JOIN users ON users.user_id = solution.user_id
                WHERE result = :status
                AND problem_id = :problem_id
                AND users.group_id = :group_id
                GROUP BY solution_id,solution.user_id
                ORDER BY score, in_date
                LIMIT :start, :limit';
            $query = DB::query(Database::SELECT, $sql)
            ->param(':status', self::STATUS_AC)
            ->param(':problem_id', $problem_id)
            ->param(':group_id', $current_group)
            ->param(':start', $start)
            ->param(':limit', $limit);
        }

        $result = $query->execute();
        return $result->as_array();
    }

    public static function user_resolved_problem($user_id)
    {
        $query = DB::select(DB::expr('distinct(problem_id)'))->from(self::$table)
            ->where('user_id', '=', $user_id)
            ->where('result', '=', self::STATUS_AC);

        $plist = $query->execute()->as_array();

        $rlist = array();
        foreach($plist as $p) array_push($rlist, $p['problem_id']);
        return $rlist;
    }

    public static function user_tried_problem($user_id)
    {
//        $query = DB::select()->from(self::$table)
//            ->where('user_id', '=', $user_id)
//            ->group_by('problem_id')
//            ->having('result', '!=', self::STATUS_AC);
        $query = DB::select(DB::expr('DISTINCT(problem_id)'))
            ->from(self::$table)
            ->where('user_id', '=', $user_id);

        $plist = $query->execute()->as_array();
        $rlist = array();
        foreach($plist as $p) array_push($rlist, $p['problem_id']);
        return $rlist;
    }

    /**
     * 重新判这个解题
     */
    public function rejudge()
    {
        $this->result = self::STATUS_PENDING_REJUDGE;
        $this->save();
    }

    /**
     *
     * 重判某个题目
     * @param $problem_id
     *
     * @return object
     */
    public static function rejudge_problem($problem_id)
    {
        $data = array(
            'result' => self::STATUS_PENDING_REJUDGE,
        );
        $query = DB::update(self::$table)
            ->set($data)
            ->where('problem_id', '=', $problem_id);

        $result = $query->execute();
        return $result;
    }

    /**
     * @param $contest_id
     * @param $start
     * @param $end
     *
     * @return Model_Solution[]
     */
    public static function find_solution_for_contest($contest_id, $start, $end)
    {
        $query = DB::select()->from(self::$table)
            ->where('contest_id', '=', $contest_id)
            ->where('in_date', '>', $start)
            ->where('in_date', '<', $end)
            ->order_by('user_id')
            ->order_by('in_date');

        $result = $query->as_object(get_called_class())->execute();
        return $result->as_array();
    }

    protected function initial_data()
    {
        $this->time   = 0;
        $this->memory = 0;
        $this->in_date = e::format_time();
        $this->result = self::STATUS_PENDING;
        $this->valid = 1;
        $this->num = -1;
        $this->pass_rate = 0;
    }

    public function validate()
    {}

    public function save()
    {
        parent::save();

        // save source code
        if ( $this->code )
        {
            $this->code->solution_id = $this->solution_id;
            $this->code->save();
        }
    }


    //add
    public static function user_all_solution($user_id){

        $query = DB::select()->from(self::$table)
            ->where('user_id', '=', $user_id);

        $query->order_by('in_date',  Model_Base::ORDER_ASC);


        $result = $query->as_object(get_called_class())->execute();

        return $result->as_array();
    }


     /**
     *
     * 通过简单的过滤器查找数据
     *
     * @param array $filters
     * @param int   $page
     * @param int   $limit
     * @param array $orderby
     *
     * @return Model_Base[]|Model_Code[]|Model_Problem[]|Model_User[]|Model_Topic[]
     */
    public static function find($filters, $page = 1, $limit = 50, $orderby=array(),$group_id=NULL)
    {
        $query = DB::select()->from(static::$table);
        if($group_id){
            $query->join(Model_User::$table)->on(self::$table.'.user_id' , '=' , Model_User::$table.'.user_id')
                ->where(Model_User::$table.'.group_id','=',$group_id);
        }
        foreach($filters as $col => $value)
        {
            $query->where($col, '=', $value);
        }
        if ( $limit ) $query->limit($limit);
        if ( $page ) $query->offset( $limit * ($page - 1));

        foreach($orderby as $col => $order)
        {
            $query->order_by($col,  $order);
        }

        $result = $query->as_object(get_called_class())->execute();

        return $result->as_array();
    }

    /**
     *
     * 统计数目
     * 主要注意的是innodb的count性能不如myisam
     *
     * @param array $filters
     *
     * @return int
     */
    public static function count($filters = array(),$group_id=NULL)
    {
        $query = DB::select(array(DB::expr('COUNT(*)'), 'total'))
                   ->from(static::$table);
        if($group_id){
            $query->join(Model_User::$table)->on(self::$table.'.user_id' , '=' , Model_User::$table.'.user_id')
                ->where(Model_User::$table.'.group_id','=',$group_id);
        }
        foreach($filters as $col => $value)
        {
            $query->where($col, '=', $value);
        }

        $result = $query->execute();
        $item = $result->current();
        return $item['total'];
    }


}

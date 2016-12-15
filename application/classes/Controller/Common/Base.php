<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common_Base extends Controller_Base{
	/**
     * @var Model_User
     */
    protected $current_user = NULL;

	/**
	* 根路径，系统管理员和组管理员不同
	*/
	abstract protected function rootPath();
	/**
	* 根路径，系统管理员和组管理员不同
	*/
	abstract protected function isLeader();


	public function before()
	{
        parent::before();
        if($this->isLeader())
            $this->current_user = $this->check_leader();
        else
            $this->current_user = $this->check_admin();
	}

    /**
     * 初始化controller
     */
    protected function init()
    {
        $this->view = 
            $this->rootPath().'/'.strtolower($this->request->controller()). '/'. $this->request->action();
    }

    /**
     * all post data
     *
     * @return array
     */
    protected function cleaned_post()
    {
        return $this->request->post();
        // trust admin
    }



}
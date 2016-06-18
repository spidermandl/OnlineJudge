<?php defined('SYSPATH') or die('No direct script access.');

//var_dump("-------------------desmond");
class Controller_Welcome extends Controller {

	public function action_index()
	{
		// $sql = "select * from options";
  //       //var_dump(Database::SELECT);
  //       $result = DB::query(Database::SELECT,$sql)-> execute()->as_array();
  //       var_dump($result);

		// var_dump(Session::$default);
		// $session = Session::instance();
		// var_dump($_SESSION);
		// $session->set("Desmond","66");
		// //$session->set("username","11");
		// var_dump($session->get("Desmond","22"));
		// var_dump($session->get("username","null"));
        //setcookie("haha", "aa", time()-3600);
		Cookie::set("haha","judge5");
		echo Cookie::get("haha");
		var_dump($_COOKIE);

		$this->response->body('hello, world!');
	}

} // End Welcome

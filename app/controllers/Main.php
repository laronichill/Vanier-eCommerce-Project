<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		//default controller method according to the routing
		$this->view('Main/index');
	}

	public function about_us(){
		//default controller method according to the routing
		$this->view('Main/about_us');
	}


	public function clock(){
		$clock = new \DateTime();
		echo json_encode($clock);
	}

	public function count(){
		$count = 5;
		echo json_encode($count);
	}
}
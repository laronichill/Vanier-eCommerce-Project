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
	public function counter(){
		$filename = 'counter.txt';
		// reading file for $counter
		if (file_exists("counter.txt")) {
			$fopen = fopen($filename, 'r');
			flock($fopen, LOCK_SH);
			$counter = fread($fopen, filesize($filename));
			fclose($fopen);
		} else {
			$counter = '{"count":0}';
		}

		$dCounter = json_decode($counter);
		$dCounter->count++;
		$counter = json_encode($dCounter);
		$fopen = fopen($filename, 'w');
		flock($fopen, LOCK_EX );
		fwrite($fopen, $counter);
		fclose($fopen);
		echo $dCounter->count;
	}
}
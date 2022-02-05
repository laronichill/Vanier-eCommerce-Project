<?php
namespace app\controllers;
	
class Contact extends \app\core\Controller{

public function index(){
		if(!isset($_POST['action'])){
			$this->view('Contact/index');
			}else{
		

			$dataToWrite = ['email'=>$_POST['email'], 'message'=>$_POST['message']];
			//var_dump($dataToWrite);
				$stringToWrite = json_encode($dataToWrite);

				$fileHandle = fopen('log.txt','a');
				flock($fileHandle, LOCK_EX);
				fwrite($fileHandle, $stringToWrite . "\r\n");
				fclose($fileHandle);

				header('location:/Contact/read');
			}
	}

	public function read(){
		$logJSON = file('log.txt');
		$this->view('Contact/read', $logJSON);
	}
}
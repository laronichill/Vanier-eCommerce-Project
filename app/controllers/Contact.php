<?php
namespace app\controllers;
	
class Contact extends \app\core\Controller{

public function index(){
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Contact/index');
			}else{

			$dataToWrite[] = ['email'=>$_POST['email'], 'msg'=>$_POST['message']];

				$fileHandle = fopen('log.txt','r+');
				flock($fileHandle, LOCK_EX);
				if (filesize("log.txt") > 0) {
					$inp = fread($fileHandle, filesize("log.txt"));
					$tempArray[] = json_decode($inp);
					array_push($tempArray, "\n", $dataToWrite);
				}
				$jsonData = json_encode($dataToWrite);
				fwrite($fileHandle, $jsonData);
				fclose($fileHandle);

				header('location:/Contact/thankYou');
			}
	}

	public function read(){
		
		if (!file_exists('log.txt')) {
			$this->view('Contact/read', "");
		} else {
			$dataObj = file('log.txt');
			$this->view('Contact/read', $dataObj);
		}
	}

	public function thankYou(){
		$this->view('Contact/thankYou');
	}
}
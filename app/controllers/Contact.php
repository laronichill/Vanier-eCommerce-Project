<?php
namespace app\controllers;
	
class Contact extends \app\core\Controller{

public function contactUs(){
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Contact/index');
			}else{
		

			$dataToWrite = ['email'=>$_POST['email'], 'message'=>$_POST['message']];
			
				$stringToWrite = json_encode($dataToWrite);

				$fileHandle = fopen('log.txt','a');
				flock($fileHandle, LOCK_EX);
				fwrite($fileHandle, $stringToWrite . "\n");
				fclose($fileHandle);

				header('location:/Contact/read');
			}
	}



	public function read(){
		$dataObj = file('log.txt');


		$this->view('Contact/read', $dataObj);

	}


}
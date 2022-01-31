<?php
namespace app\controllers;

class Contact extends \app\core\Controller{
	public function index(){
		$ContactsJSON = file('MessagesList.txt');
		$this->view('Contact/index',$ContactsJSON);
	}

	public function create(){
		//notice that this controller method uses both the
		//Contact/create view (for the form) and the Contact/feedback
		//view to provide information on entered values.
		//Notice also that these get called at
		//http://localhost/Contact/create based on what is posted.
		if(!isset($_POST['action'])){	//display he view if I don't submit the form
			$this->view('Contact/create');
		}else{	//process the data
			//TODO: write the received data into a file			
			//create a string to store the 'name' and 'dob' data in the file
			$dataToWrite = ['name'=>$_POST['name'], 'dob'=>$_POST['dob']];//get the data
			//convert to a string
			$stringToWrite = json_encode($dataToWrite);

			$fileHandle = fopen('ContactList.txt','a');
			flock($fileHandle, LOCK_EX);
			fwrite($fileHandle, $stringToWrite . "\n");//something missing here... 
			fclose($fileHandle);

			header('location:/Contact/index');
//			$this->view('Contact/feedback',$_POST);
		}
	}

	public function contactInformation(){
		$fileHandle = fopen('contactInformation.txt', 'r');

		flock($fileHandle, LOCK_SH);

		$jsonData = fread($fileHandle, 1024);

		fclose($fileHandle);

		$dataObj = json_decode($jsonData);

		$this->view('Contact/contactInformation', $dataObj);

	}

}
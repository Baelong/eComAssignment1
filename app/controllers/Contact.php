<?php
namespace app\controllers;

use stdClass;

class Contact extends \app\core\Controller{

	function index(){
		$this->view('Contact/index');
	}

	function read(){

		$this->view('Contact/read');
	}

	function read_messages(){
		$messages = \app\models\Message::read();
		$this->view('contact/read',['data' => $messages]);
	}

	function send_messages(){
		//call a view to show the submitted data
		//collect the data
		//declare a person object
		$sentMessage = new \app\models\Message();
		//populate the properties
		$sentMessage->email = $_POST['email'];
		$sentMessage->message = $_POST['message'];
		$sentMessage->IP = $_SERVER['REMOTE_ADDR'];
		
		//write message to txt file
		$sentMessage->write(); 
		 header('Location:/Contact/read');
		 exit;
	}
}
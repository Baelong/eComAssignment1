<?php
namespace app\controllers

use stdClass;

class Person extends \app\core\Controller{

/*
	function list(){
		$people = \app\models\Person::getAll();
		$this->view('Person/list',$people);
	}


	function register(){
		//showing the register view
		$this->view('Person/register');
	}
*/
	function send_message(){
		print_r($_POST);

		//call a view to show the submitted data
		//collect the data
		//declare a person object
		$person = new \app\models\Message();
		//populate the properties
		$person->first_name = $_POST['first_name'];
		$person->last_name = $_POST['last_name'];
		$person->email = $_POST['email'];
		$publications = $_POST['publications'] ?? [];
		$person->weekly_flyer = in_array('weekly_flyer', $publications);
		$person->mailing_list = in_array('mailing_list', $publications);
		//$person->mailing_list = $_POST['mailing_list'] ?? 'unselected';//null coalescing to avoid warnings when no option of a radio button is selected
		//hypothetically insert into a database
		$person->insert(); //add the person to the data file
		//show the feedback view to confirm with the user
		//$this->view('Person/complete_registration',$person);

		//redirect the user back to the list
		header('location:/Contact/read');
	}

}
<?php
namespace app\controllers;

use stdClass;

class Main extends \app\core\Controller{

	function landingPage(){
	$this->view('main/index');
	}
	
	function aboutUs(){
	$this.view('main/about_us');
	}
	
	
}
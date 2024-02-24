<?php
namespace app\controllers;

use stdClass;

class Main extends \app\core\Controller{

	function landingPage(){
	$this->view('Main/index');
	}
	
	function aboutUs(){
	$this.view('Main/about_us');
	}
	
	
}
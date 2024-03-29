<?php
namespace app\core;

class App{

    function __construct(){
  
        $url = $_GET['url'];

        //defined a few routes "url"=>"controller,method"
        $routes = ['Main/index'=>'Main,index',
                    'Main/about_us'=>'Main,about_us',
                    'Contact/index' => 'Contact,index',
                    'Contact/read' => 'Contact,read',
                    'Contact/send_messages' => 'Contact,send_messages',
                    'Contact/read_messages' => 'Contact,read_messages'];

        //one by one compare the url to resolve the route
        foreach ($routes as $routeUrl => $controllerMethod) {
            if($url == $routeUrl){//match the route
                //run the route
                [$controller,$method]=explode(',', $controllerMethod);
                $controller = '\\app\\controllers\\'.$controller;
                $controller = new $controller();
                $controller->$method();
                //make sure that we don't run a second route
                break;
            }
        }


    }
}
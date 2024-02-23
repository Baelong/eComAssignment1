<?php
namespace app\core;

class App{
    private $routes = [];

    public function addRoute($url,$handler){
        $url = preg_replace('/{([^\/]+)}/', '(?<$1>[^\/]+)', $url);
        $this->routes[$url] = $handler;
    }

    function __construct(){

  /*      $this->addRoute('Person/edit/{id}', 'Person,edit');
        echo '<pre>';
        print_r($this->routes);
        echo '</pre>';

*/
//        exit();


    	//call the appropriate controller class and method to handle the HTTP Request

        //Routing version 0.1
        //TODO: add PARAMETERS - later
        $url = $_GET['url'];

        //defined a few routes "url"=>"controller,method"
        $routes = ['Person/register'=>'Person,register',
                    'Person/complete_registration'=>'Person,complete_registration',
                    'Person/'=>'Person,list',
                    'Person/delete' => 'Person,delete',
                    'Person/edit/{id}' => 'Person,edit',
                    'Person/update' => 'Person,update'];

                    /*1- localhost/Main/index -> site landing view
2- Localhost/Main/about_us -> the about us view
3- localhost/Contact/index -> the contact us form view
4- localhost/Contact/read -> the listing of all messages
5- localhost/Count/index -> a page load counter
*/

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
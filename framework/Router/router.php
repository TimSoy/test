<?php

namespace Framework\Router;
//use Framework\Request\Request;

class Router
{
    public static $routes;

    public function __construct($route)
    {
        self::$routes = $route;
    }
    public function getRoute()
    {	
    	$uri = \Framework\Request\Request::getURI();
    	$uris = explode('/', $_SERVER['REQUEST_URI']); 
		if (array_key_exists($uris[1], self::$routes)) {
			$controller = self::$routes[$uris[1]]['controller'];
			$action     = self::$routes[$uris[1]]['action'];
		}

		//Reflection

		echo "<pre>"; var_dump($uris); echo "</pre>";
        echo $action;
    }
} 
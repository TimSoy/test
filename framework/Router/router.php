<?php

namespace Framework\Router;
use Framework\DI\Service;
use Framework\Request\Request;

class Router
{
    protected static $routes1 = [];

    public function __construct($route)
    {
        self::$routes1 = $route;
    }

    public function getRoute()
    {	
    	$url = Request::getURL(); 

        foreach (self::$routes1 as $key => $value) {  
            if (strpos($value['pattern'], '{')) {
                $pattern = $this->patternToRegexp($value);
            } else {
                $pattern = $value['pattern'];
            } 
                
            if (preg_match('~^'.$pattern.'$~', $url))
            {
                $routes = $value;
            }
        } 
    return $routes; 
    }

    private function patternToRegexp($routes)
    { 
        preg_match_all('~\{\w+\}~', $routes['pattern'], $string);

        foreach ($string[0] as $value) {
            $replace = $routes['_requirements'][trim($value, '{}')];
            $str = str_replace($string[0], $replace, $routes['pattern']);
            return $str;
        }
    }
} 
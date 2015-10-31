<?php

namespace Framework;
use Framework\DI\Service;
use Framework\Router\Router;
use Framework\Request\Request;

class Application
{	
	private static $config = [];

	public function __construct($configPath)
	{
		self::$config = include $configPath;

		Service::set('request', 'Framework\Request\Request');

		Service::set('router', function() 
			{
            $object = new Router(self::$config['routes']);
            return $object;
        	}
        );

   

		/*
        Service::set('response', 'Framework\Response\Response');
        
        Service::set('security', 'Framework\Security\Security');
        Service::set('session', 'Framework\Session\SessionManager');
        Service::set('localization', 'Framework\Localization\LocalizationManager', array(self::$config['localization']));
      	*/  
	}

	public function run()
	{
		$request = Service::get('request');

		$router = Service::get('router')->getRoute();;
		
        $controller = $router['controller'];
        
        $action = $router['action'];

	}
}
<?php

namespace Framework;

class Application
{	
	private static $config = [];

	public function __construct($configPath)
	{
		self::$config = include $configPath;
	}

	public function run()
	{
		$router = new \Framework\Router\Router(self::$config['routes']);
		$router->getRoute();
	}
}
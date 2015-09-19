<?php

namespace Framework;

class Application 
{	
	public function __construct($text)
	{
		echo $text . "<br>";
	}

	public function run() /* pageController frontController */
	{
		echo date("G:i:s m.d.y");
	}
}

/* Router - находит соответствие введенного URI с имеющиемися файлами 

if ($route= Router -> find($ur))
{
	$route;

	$ctrl = $route['controller'];
	$refl = new ReflectionClass($ctrl);
	$refl -> has Method($route['action']);
		invoke();
}
*/
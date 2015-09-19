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

/* 
*/
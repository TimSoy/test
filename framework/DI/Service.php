<?php

namespace Framework\DI;
use ReflectionClass;

class Service
{
    private static $services = [];

    public static function set($service_name, $object)
    {
		self::$services[$service_name] = $object;
    }
    
    public static function get($service_name)
    { 
    	$service = self::$services[$service_name];
    	
    	if (is_callable($service)) {
            $object = call_user_func($service);

        } else {
    	
        	if (!isset($service)) {
            	return self::Reflection($service_name);
	        }
            
  		$object = self::get($service);	
		}
        
        return $object;
    }

    protected static function Reflection($service_name)
    {
        $reflection = new ReflectionClass($service_name);
        return $reflection->newInstanceArgs();
    }
}


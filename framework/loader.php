<?php

spl_autoload_register('Loader::loadClass');

class Loader
{
    // private static $nameSpaces = [];
    public static function addNamespacePath($name, $path) 
    {
        // self::$nameSpaces[$name] = $path;
    }

    public static function loadClass($class) 
    {
        $classParts = explode('\\', $class);
        $classParts[0] = __DIR__;
        $path = implode(DIRECTORY_SEPARATOR, $classParts) . '.php';
        if (file_exists($path)) {
            require_once($path);
        }
    }
}






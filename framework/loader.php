<?php

class Loader
{   
    public static $namespaces = [];

    public static function addNamespacePath($name, $path)
    {
        self::$namespaces[$name] = $path;         
    }

    public static function register()
    {
        spl_autoload_register('Loader::autoload');
    }

    public static function autoload($class)
    {
        $blocks = explode('\\', $class);
        $name = array_shift($blocks) . '\\';
        if (!empty(self::$namespaces[$name])) {
            $path = self::$namespaces[$name] . '/' . implode('/', $blocks) . '.php';
            require_once $path;
        } else { 
            foreach (self::$namespaces as $name) {
                $path = $name . '/' . $class . '.php';
                if (file_exists($path)) {
                    require_once $path;
                }
            }
        }
    }
}

Loader::register();

Loader::addNamespacePath('Framework\\',__DIR__);
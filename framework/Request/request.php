<?php

namespace Framework\Request;

class Request 
{

    public static function getURL()
    {
        return trim($_SERVER['REQUEST_URI']);
    }

    public function getMethod() {
		return isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';    
	}

    public function get($varname) 
    {
        if($this->getMethod() === 'GET') {
           $result = isset($_GET[$varname]) ? $this->filter($_GET[$varname]) : null;
           return $result;
        }
    }

    public function post($varname) 
    {
        if($this->getMethod() === 'POST') {
           $result = isset($_GET[$varname]) ? $this->filter($_GET[$varname]) : null;
           return $result;
        }
    }

    protected function filter($value)
    {
        $value = preg_replace('/<\s*\/*\s*\w*>|[\$`~#<>\[\]\{\}\\\*\^%]/', "", trim($value));
        return htmlspecialchars($value);
    }

}
<?php

namespace Framework\Request;

class Request 
{
    public static function getURI()
    {
        return trim($_SERVER['REQUEST_URI']);
    }

	public function post($varname) {
		return array_key_exists($varname, $_POST) ? $this->filter($_POST[$varname]) : NULL;
	}

	public function get($varname) {
		return array_key_exists($varname, $_GET) ? $this->filter($_GET[$varname]) : NULL;
	}
	
	/*
	public function isPost() {
		return $this->getMethod();
	}

	public function getMethod() {
		$_SERVER['REQUST_METHOD'];
	}
	*/

	protected function filter($value) {
		//$pattern = '/[\w\d_-]/i'
		//непечатные символы
		return $value;
	}
}
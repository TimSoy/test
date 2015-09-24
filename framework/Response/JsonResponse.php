<?php

namespace Framewor\Response;

use Framewor\Response;

class JsonResponce extends Response {

	function send() {
		$this->setHeader('HTTP/1.1'.$this->code . '' . $this->msg);
		$this->setHeader('Content-Type: application/json');

		header(implode("\n", $this->headers));

		echo $this->getContent();
	}
}	
}

interface ResponseInterface {

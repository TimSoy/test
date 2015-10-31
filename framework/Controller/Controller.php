<?php
/*
namespace Fravework\Controller;

abstract class Controller {
	public function render($layout, $data) {

		$ctrl_class = get_class($this);

		$path_to_layout = '...';
		$renderer = new Renderer($layout, $data);
		return new Response($renderer->render());
	}

	public function getRequest() {
		return new Request();
	}

	public function redirect($url, $msg = '') {
		return new RedirectResponse($url);
	}

	public function generateRoute($name) {
		
	}
}
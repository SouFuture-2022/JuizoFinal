<?php

class Controller {

	public static function CreateView($viewName) {
		require_once ("./Views/" . $viewName . ".php");
		//static::doSomething();
	}
}

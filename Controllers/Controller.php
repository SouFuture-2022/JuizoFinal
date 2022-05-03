<?php

	class Controller extends Conexao {

		public static function CreateView($viewName) {
			require_once ("./Views/" . $viewName . ".php");
			//static::doSomething();
		}
	}

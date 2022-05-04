<?php
use Infra\Database\Conexao;

	class Controller {

		public static function CreateView($viewName) {
			$db = new Conexao();
			require_once ("./Views/" . $viewName . ".php");
			//static::doSomething();
		}
	}

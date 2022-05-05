<?php

namespace Models;

class Categorias{

	private $nome_categoria;

	public function setNomeCategotia($nome_categoria) {
		$this->nome_categoria = $nome_categoria;
	}

	public function getNomeCategotia() {
		return $this->nome_categoria;
	}
}

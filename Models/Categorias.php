<?php

namespace Models;

class Categorias {

	private $nome_categoria;

	public function setNomeCategoria($nome_categoria) {
		$this->nome_categoria = $nome_categoria;
	}

	public function getNomeCategoria() {
		return $this->nome_categoria;
	}
	
}

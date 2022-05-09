<?php

namespace App\Models;

class Favoritos{

	private $id_usuario;
	private $id_produto;

	public function setIdusuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	public function getIdusuario() {
		return $this->id_usuario;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}
	
	public function getIdproduto() {
		return $this->id_produto;
	}
}

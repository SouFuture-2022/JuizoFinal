<?php

#require_once 'Crudavaliacoes.php';

#Crud não conectado

class Avaliacoes {

	private $estrela;
	private $id_produto;

	public function setEstrela($estrela) {
		$this->estrela = $estrela;
	}

	public function getEstrela() {
		return $this->estrela;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}
	
	public function getIdproduto() {
		return $this->id_produto;
	}


}

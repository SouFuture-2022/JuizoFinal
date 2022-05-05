<?php
namespace Models;
#Crud não interligado

class Cores {

	private $nome_cor;
	private $quantidade_cor;
	private $id_produto;

	public function setNomecor($nome_cor) {
		$this->nome_cor = $nome_cor;
	}

	public function getNomecor() {
		return $this->nome_cor;
	}

	public function setQuantidadecor($quantidade_cor) {
		$this->quantidade_cor = $quantidade_cor;
	}
	
	public function getQuantidadecor() {
		return $this->quantidade_cor;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}

	public function getIdproduto() {
		return $this->id_produto;
	}

}

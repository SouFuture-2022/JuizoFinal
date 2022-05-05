<?php

class Imagens{

	private $nome_imagem;
	private $id_produto;

	public function setNomeimagem($nome_imagem) {
		$this->nome_imagem = $nome_imagem;
	}

	public function getNomeimagem() {
		return $this->nome_imagem;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}

	public function getIdproduto() {
		return $this->id_produto;
	}
}

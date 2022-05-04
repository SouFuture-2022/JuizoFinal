<?php

class Tamanho{

	private $sub_categoria;
	private $tamanho_superior;
	private $tamanho_inferior;
	private $quantidade_tamanho;
	private $id_produto;

	public function setSubcategoria($sub_categoria) {
		$this->sub_categoria = $sub_categoria;
	}

	public function getSubcategoria() {
		return $this->sub_categoria;
	}

	public function setTamanhosuperior($tamanho_superior) {
		$this->tamanho_superior = $tamanho_superior;
	}

	public function getTamanhosuperior() {
		return $this->tamanho_superior;
	}

	public function setTamanhoinferior($tamanho_inferior) {
		$this->tamanho_inferior = $tamanho_inferior;
	}

	public function getTamanhoinferior() {
		return $this->tamanho_inferior;
	}

	public function setQuantidadetamanho($quantidade_tamanho) {
		$this->quantidade_tamanho = $quantidade_tamanho;
	}

	public function getQuantidadetamanho() {
		return $this->quantidade_tamanho;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}

	public function getIdproduto() {
		return $this->id_produto;
	}
}

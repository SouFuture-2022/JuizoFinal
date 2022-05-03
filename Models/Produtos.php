<?php

namespace Models;

class Produtos{

	private $nome;
	private $imagem_destaque;
	private $habilitar_cor;
	private $habilitar_tamanho;
	private $cor;
	private $tamanho;
	private $preco;
	private $quantidade;
	private $peso;
	private $un_medida;
	private $descricao;
	private $id_categoria;

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setImagem($imagem_destaque) {
		$this->imagem_destaque = $imagem_destaque;
	}

	public function getImagem() {
		return $this->imagem_destaque;
	}

	public function setHabilitarcor($habilitar_cor) {
		$this->habilitar_cor = $habilitar_cor;
	}
	
	public function getHabilitarcor() {
		return $this->habilitar_cor;
	}

	public function setHabilitartamanho($habilitar_tamanho) {
		$this->habilitar_tamanho = $habilitar_tamanho;
	}
	
	public function getHabilitartamanho() {
		return $this->habilitar_tamanho;
	}

	public function setCor($cor) {
		$this->cor = $cor;
	}

	public function getCor() {
		return $this->cor;
	}

	public function setTamanho($tamanho) {
		$this->tamanho = $tamanho;
	}

	public function getTamanho() {
		return $this->tamanho;
	}

	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}

	public function getQuantidade() {
		return $this->quantidade;
	}

	public function setPeso($peso) {
		$this->peso = $peso;
	}

	public function getPeso() {
		return $this->peso;
	}

	public function setUnmedida($un_medida) {
		$this->un_medida = $un_medida;
	}

	public function getUnmedida() {
		return $this->un_medida;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setIdcategoria($id_categoria) {
		$this->id_categoria = $id_categoria;
	}

	public function getIdcategoria() {
		return $this->id_categoria;
	}
	
}

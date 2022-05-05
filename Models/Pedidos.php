<?php
namespace Models;
class Pedidos{

	private $num_pedido;
	private $name;
	private $color;
	private $size;
	private $amount;
	private $price;
	private $total;
	private $id_product;
	private $id_user;

	public function setNumpedido($num_pedido) {
		$this->num_pedido = $num_pedido;
	}

	public function getNumpedido() {
		return $this->num_pedido;
	}

	public function setNome($name) {
		$this->name = $name;
	}
	
	public function getNome() {
		return $this->name;
	}

	public function setCor($color) {
		$this->color = $color;
	}

	public function getCor() {
		return $this->color;
	}

	public function setTamanho($size) {
		$this->size = $size;
	}

	public function getTamanho() {
		return $this->size;
	}	

	public function setQuantidade($amount) {
		$this->amount = $amount;
	}

	public function getQuantidade() {
		return $this->amount;
	}

	public function setPreco($price) {
		$this->price = $price;
	}

	public function getPreco() {
		return $this->price;
	}

	public function setSubtotal($total) {
		$this->total = $total;
	}

	public function getSubtotal() {
		return $this->total;
	}

	public function setIdproduto($id_product) {
		$this->id_product = $id_product;
	}

	public function getIdproduto() {
		return $this->id_product;
	}

	public function setIdusuario($id_user) {
		$this->id_user = $id_user;
	}

	public function getIdusuario() {
		return $this->id_user;
	}
}

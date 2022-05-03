<?php

require_once 'Crudpedidos.php';

class Pedidos extends Crudpedidos {

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

	public function insert(){
		$sql = "INSERT INTO pedidos (num_pedido, nome, cor, tamanho, quantidade, preco, sub_total, id_produto, id_usuario, data_pedido) 
		VALUES (:num_pedido, :nome, :cor, :tamanho, :quantidade, :preco, :sub_total, :id_produto, :id_usuario, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':num_pedido', $this->num_pedido);
		$stmt->bindParam(':nome', $this->name);
		$stmt->bindParam(':cor', $this->color);
		$stmt->bindParam(':tamanho', $this->size);
		$stmt->bindParam(':quantidade', $this->amount);
		$stmt->bindParam(':preco', $this->price);
		$stmt->bindParam(':sub_total', $this->total);
		$stmt->bindParam(':id_produto', $this->id_product);
		$stmt->bindParam(':id_usuario', $this->id_user);
		return $stmt->execute();
	}
}

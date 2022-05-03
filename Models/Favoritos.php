<?php

require_once 'Crudfavoritos.php';

class Favoritos extends Crudfavoritos {

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

	public function insert(){
		$sql = "INSERT INTO favoritos (id_usuario, id_produto, criado_em) VALUES (:id_usuario, :id_produto, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

	public function update($id_favorito) {
		$sql  = "UPDATE favoritos SET id_usuario = :id_usuario, id_produto = :id_produto WHERE id_favorito = :id_favorito";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		$stmt->bindParam(':id_favorito', $id_favorito);
		return $stmt->execute();
	}
}

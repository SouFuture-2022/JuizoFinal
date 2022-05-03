<?php

require_once 'Crudcores.php';

class Cores extends Crudcores {

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

	public function insert(){
		$sqlUsuario  = "INSERT INTO cores (nome_cor, quantidade_cor, id_produto, criado_em) VALUES (:nome_cor, :quantidade_cor, :id_produto, NOW())";
		$stmt = Conexao::prepare($sqlUsuario);
		$stmt->bindParam(':nome_cor', $this->nome_cor);
		$stmt->bindParam(':quantidade_cor', $this->quantidade_cor);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

	public function update($id_cor) {
		$sql  = "UPDATE cores SET nome_cor = :nome_cor, quantidade_cor = :quantidade_cor WHERE id_cor = :id_cor";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome_cor', $this->nome_cor);
		$stmt->bindParam(':quantidade_cor', $this->quantidade_cor);
		$stmt->bindParam(':id_cor', $id_cor);
		return $stmt->execute();
	}
}

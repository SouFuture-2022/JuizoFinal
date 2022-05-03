<?php

require_once 'Crudtamanho.php';

class Tamanho extends Crudtamanho {

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

	public function insert(){
		$sql = "INSERT INTO tamanhos (sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto, criado_em) VALUES (:sub_categoria, :tamanho_superior, :tamanho_inferior, :quantidade_tamanho, :id_produto, NOW()";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':sub_categoria', $this->sub_categoria);
		$stmt->bindParam(':tamanho_superior', $this->tamanho_superior);
		$stmt->bindParam(':tamanho_inferior', $this->tamanho_inferior);
		$stmt->bindParam(':quantidade_tamanho', $this->quantidade_tamanho);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

	public function update($id_produto) {
		$sql  = "UPDATE tamanhos SET sub_categoria = :sub_categoria, tamanho_superior = :tamanho_superior, tamanho_inferior = :tamanho_inferior, quantidade_tamanho = :quantidade_tamanho WHERE id_tamanho = :id_tamanho";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':sub_categoria', $this->sub_categoria);
		$stmt->bindParam(':tamanho_superior', $this->tamanho_superior);
		$stmt->bindParam(':tamanho_inferior', $this->tamanho_inferior);
		$stmt->bindParam(':quantidade_tamanho', $this->quantidade_tamanho);
		$stmt->bindParam(':id_tamanho', $id_tamanho);
		return $stmt->execute();
	}
}

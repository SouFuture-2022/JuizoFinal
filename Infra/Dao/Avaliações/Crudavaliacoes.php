<?php

use Infra\Database\conexao;

abstract class Crudavaliacoes extends Conexao {

	abstract public function insert();
	abstract public function update($id_avaliacao);

	public function find($id_produto) {
		$sql  = "SELECT AVG(estrela) FROM avaliacoes WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAll() {
		$sql  = "SELECT id_avaliacao, estrela , id_produto FROM avaliacoes";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	public function findAllCount($id_produto) {
		$sql  = "SELECT COUNT(id_produto) FROM avaliacoes WHERE id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function delete($id_avaliacao) {
		$sql  = "DELETE FROM avaliacoes WHERE id_avaliacao = :id_avaliacao";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

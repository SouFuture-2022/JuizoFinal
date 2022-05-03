<?php

require_once 'Conexao.php';

abstract class Crudcores extends Conexao {

	abstract public function insert();
	abstract public function update($id_cor);

	public function find($id_produto) {
		$sql  = "SELECT id_cor, nome_cor, quantidade_cor FROM cores WHERE quantidade_cor > 0 AND id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll() {
		$sql  = "SELECT id_cor, nome_cor, quantidade_cor FROM cores";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_cor) {
		$sql  = "DELETE FROM cores WHERE id_cor = :id_cor";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_cor', $id_cor, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

<?php

require_once 'Conexao.php';

abstract class Crudtamanho extends Conexao {

	abstract public function insert();
	abstract public function update($id_tamanho);

	public function find($id_produto) {
		$sql  = "SELECT id_tamanho, sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto FROM tamanhos WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll() {
		$sql  = "SELECT id_tamanho, sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto FROM tamanhos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllP($id_produto) {
		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'P' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
	
	public function findAllM($id_produto) {
		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'M' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllG($id_produto) {
		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'G' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function delete($id_tamanho) {
		$sql  = "DELETE FROM tamanhos WHERE id_tamanho = :id_tamanho";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_tamanho', $id_tamanho, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

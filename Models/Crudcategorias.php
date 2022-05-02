<?php

use Infra\Database\Conexao;

abstract class Crudcategorias extends Conexao {

	abstract public function insert();
	abstract public function update($id_categoria);

	public function find($id_categoria) {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE id_categoria = :id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias ORDER BY nome_categoria DESC";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCount() {
		$sql  = "SELECT COUNT(id_categoria) FROM categorias";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllSearch($buscar) {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE nome_categoria LIKE '%$buscar%'";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_categoria) {
		$sql  = "DELETE FROM categorias WHERE id_categoria = :id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

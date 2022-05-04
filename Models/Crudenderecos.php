<?php

require_once 'Conexao.php';

abstract class Crudenderecos extends Conexao {

	abstract public function insert();
	abstract public function update($id_endereco);

	public function find($id_endereco) {
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_endereco) {
		$sql  = "DELETE FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

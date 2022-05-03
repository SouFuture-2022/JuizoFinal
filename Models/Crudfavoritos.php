<?php

require_once 'Conexao.php';

abstract class Crudfavoritos extends Conexao {

	abstract public function insert();
	abstract public function update($id_favorito);

	public function find($id_favorito) {
		$sql  = "SELECT id_usuario, id_produto FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
		$sql  = "SELECT id_usuario, id_produto FROM favoritos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_favorito) {
		$sql  = "DELETE FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

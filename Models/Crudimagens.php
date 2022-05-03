<?php

require_once 'Conexao.php';

abstract class Crudimagens extends Conexao {

	abstract public function insert();
	abstract public function update($id_imagem);

	public function find($id_produto) {
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll() {
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCount($id_produto) {
		$sql  = "SELECT COUNT(id_produto) FROM imagens WHERE id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function delete($id_imagem) {
		$sql  = "DELETE FROM usuarios WHERE id_imagem = :id_imagem";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_imagem', $id_imagem, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

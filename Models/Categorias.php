<?php


use Infra\Database\Conexao;

class Categorias extends Crudcategorias {

	private $nome_categoria;

	public function setNomeCategotia($nome_categoria) {
		$this->nome_categoria = $nome_categoria;
	}

	public function getNomeCategotia() {
		return $this->nome_categoria;
	}

	public function insert(){
		$sqlCategoria  = "INSERT INTO categorias (nome_categoria, criado_em) VALUES (:nome_categoria, NOW())";
		$stmt = Conexao::prepare($sqlCategoria);
		$stmt->bindParam(':nome_categoria', $this->nome_categoria);
		return $stmt->execute();
	}

	public function update($id_categoria) {
		$sql  = "UPDATE categorias SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome_categoria', $this->nome_categoria);
		$stmt->bindParam(':id_categoria', $id_categoria);
		return $stmt->execute();
	}
}

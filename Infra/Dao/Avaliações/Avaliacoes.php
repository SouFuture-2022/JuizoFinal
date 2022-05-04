<?php

require_once 'Crudavaliacoes.php';

class Avaliacoes extends Crudavaliacoes {

	private $estrela;
	private $id_produto;

	public function setEstrela($estrela) {
		$this->estrela = $estrela;
	}

	public function getEstrela() {
		return $this->estrela;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}
	
	public function getIdproduto() {
		return $this->id_produto;
	}

	public function insert(){
		$sql = "INSERT INTO avaliacoes (estrela, id_produto, criado_em) VALUES (:estrela, :id_produto, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':estrela', $this->estrela);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

	public function update($id_avaliacao) {
		$sql  = "UPDATE avaliacoes SET estrela = :estrela WHERE id_avaliacao = :id_avaliacao";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':estrela', $this->estrela);
		$stmt->bindParam(':id_produto', $this->id_produto);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao);
		return $stmt->execute();
	}
}

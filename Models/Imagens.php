<?php

require_once 'Crudimagens.php';

class Imagens extends Crudimagens {

	private $nome_imagem;
	private $id_produto;

	public function setNomeimagem($nome_imagem) {
		$this->nome_imagem = $nome_imagem;
	}

	public function getNomeimagem() {
		return $this->nome_imagem;
	}

	public function setIdproduto($id_produto) {
		$this->id_produto = $id_produto;
	}

	public function getIdproduto() {
		return $this->id_produto;
	}

	public function insert(){
		$sql = "INSERT INTO imagens (nome_imagem, id_produto, criado_em) VALUES (:nome_imagem, :id_produto, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}

	public function update($id_imagem) {
		$sql  = "UPDATE imagens SET nome_imagem = :nome_imagem WHERE id_imagem = :id_imagem";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_imagem', $id_imagem);
		return $stmt->execute();
	}
}

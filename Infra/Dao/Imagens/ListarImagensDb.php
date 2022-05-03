<?php 

namespace Infra\Dao\Imagens;

use Infra\Database\Conexao;
use PDO;

class Find_Imagens{

    public function Find($id_produto) {
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}

class FindAll{
	public function FindAll() {
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}

class FindAllCount{
	public function FindAllCount($id_produto) {
		$sql  = "SELECT COUNT(id_produto) FROM imagens WHERE id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
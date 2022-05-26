<?php 

namespace App\Infra\Dao\Imagens;

use App\Infra\Database\Conexao;
use PDO;

class ListarImagensDb{

    public function find($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens WHERE id_produto = :id_produto";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll() {
		$db = new Conexao();
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCount($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM imagens WHERE id_produto =:id_produto";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
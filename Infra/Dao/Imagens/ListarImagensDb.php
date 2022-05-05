<?php 

namespace Infra\Dao\Imagens;

use Infra\Database\Conexao;
use PDO;

class ListarImagensDb{

    public function Find($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAll() {
		$db = new Conexao();
		$sql  = "SELECT id_imagem, nome_imagem, id_produto FROM imagens";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllCount($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM imagens WHERE id_produto =:id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
<?php 

namespace Infra\Dao\Cores;

use Infra\Database\Conexao;
use PDO;

class ListarCoresDb{
    

    public function find_Cores($id_produto) {
        $db = new Conexao();
		$sql  = "SELECT id_cor, nome_cor, quantidade_cor FROM cores WHERE quantidade_cor > 0 AND id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll_Cores() {
        $db = new Conexao();
		$sql  = "SELECT id_cor, nome_cor, quantidade_cor FROM cores";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
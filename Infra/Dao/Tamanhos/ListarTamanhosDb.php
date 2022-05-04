<?php 

namespace Infra\Dao\TamanhosDb;

use Infra\Database\Conexao;
use PDO;

class ListarTamanhosDb {
    public function find($id_produto) {
        $db = new Conexao();

		$sql  = "SELECT id_tamanho, sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto FROM tamanhos WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll() {
        $db = new Conexao();

		$sql  = "SELECT id_tamanho, sub_categoria, tamanho_superior, tamanho_inferior, quantidade_tamanho, id_produto FROM tamanhos";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}


	public function findAllP($id_produto) {
        $db = new Conexao();

		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'P' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
	
	public function findAllM($id_produto) {
        $db = new Conexao();
        
		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'M' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllG($id_produto) {
        $db = new Conexao();

		$sql  = "SELECT COUNT(tamanho_superior) FROM tamanhos WHERE tamanho_superior = 'G' AND tamanho_superior > 0 AND id_produto =:id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

}
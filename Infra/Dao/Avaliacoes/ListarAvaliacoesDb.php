<?php 
#teste
namespace Infra\Dao\Avaliacoes;

use Infra\Database\Conexao;
use PDO;

class ListarAvaliacoesDb {
    
    public function find($id_produto) {
        $db = new Conexao();

		$sql  = "SELECT AVG(estrela) FROM avaliacoes WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAll() {
        $db = new Conexao();

		$sql  = "SELECT id_avaliacao, estrela , id_produto FROM avaliacoes";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	public function findAllCount($id_produto) {
        $db = new Conexao();

		$sql  = "SELECT COUNT(id_produto) FROM avaliacoes WHERE id_produto =:id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
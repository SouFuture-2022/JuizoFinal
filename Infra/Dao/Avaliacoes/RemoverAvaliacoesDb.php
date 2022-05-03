<?php 

namespace Infra\Dao\Avaliacoes;
use PDO;
use Infra\Database\conexao;

class Delete{
    public function delete($id_avaliacao) {
		$sql  = "DELETE FROM avaliacoes WHERE id_avaliacao = :id_avaliacao";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
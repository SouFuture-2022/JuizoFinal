<?php 

namespace App\Infra\Dao\Avaliacoes;

use App\Infra\Database\Conexao;
use PDO;

class RemoverAvaliacoesDb {

	public function delete($id_avaliacao) {
        $db = new Conexao();

		$sql  = "DELETE FROM avaliacoes WHERE id_avaliacao = :id_avaliacao";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

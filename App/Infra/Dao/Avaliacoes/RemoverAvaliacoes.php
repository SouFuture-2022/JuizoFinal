<?php 

namespace Infra\Dao\Avaliacoes;

use Infra\Database\Conexao;
use PDO;

class RemoverAvaliacoesDb {

	public function delete($id_avaliacao) {
        $db = new Conexao();

		$sql  = "DELETE FROM avaliacoes WHERE id_avaliacao = :id_avaliacao";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

<?php

namespace Infra\Dao\Tamanhos;

use Infra\Database\Conexao;
use PDO;

class RemoverTamanhosDb {

	public function delete($id_tamanho) {
        $db = new Conexao();

		$sql  = "DELETE FROM tamanhos WHERE id_tamanho = :id_tamanho";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_tamanho', $id_tamanho, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}
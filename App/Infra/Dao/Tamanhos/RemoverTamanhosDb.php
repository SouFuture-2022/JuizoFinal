<?php

namespace App\Infra\Dao\Tamanhos;

use App\Infra\Database\Conexao;
use PDO;

class RemoveTamanhosDb {

	public function delete($id_tamanho) {
        $db = new Conexao();

		$sql  = "DELETE FROM tamanhos WHERE id_tamanho = :id_tamanho";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_tamanho', $id_tamanho, PDO::PARAM_INT);
		return $stmt->execute(); 
	}

}
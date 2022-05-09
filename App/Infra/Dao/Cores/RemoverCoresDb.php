<?php

namespace App\Infra\Dao\Cores;

use App\Infra\Database\Conexao;
use PDO;

class RemoverCoresDb {
    
    public function delete($id_cor) {
        $db = new Conexao();

		$sql  = "DELETE FROM cores WHERE id_cor = :id_cor";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_cor', $id_cor, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
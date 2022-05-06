<?php

namespace Infra\Dao\Cores;

use Infra\Database\Conexao;
use PDO;

class RemoverCoresDb {
    
    public function RemoverCoresDb($id_cor) {
        $db = new Conexao();

		$sql  = "DELETE FROM cores WHERE id_cor = :id_cor";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_cor', $id_cor, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
<?php 

namespace App\Infra\Dao\Cores;

use App\Infra\Database\Conexao;

class AlterarCoresDb {
    
	public function update($id_cor) {
        $db = new Conexao();
		$sql  = "UPDATE cores SET nome_cor = :nome_cor, quantidade_cor = :quantidade_cor WHERE id_cor = :id_cor";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome_cor', $this->nome_cor);
		$stmt->bindParam(':quantidade_cor', $this->quantidade_cor);
		$stmt->bindParam(':id_cor', $id_cor);
		return $stmt->execute();
	}
}
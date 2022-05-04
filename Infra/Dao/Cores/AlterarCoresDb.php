<?php 

namespace Infra\Dao\Cores;

use Infra\Database\Conexao;

class AlterarCores {
    
	public function AlterarCores($id_cor) {
        $db = new Conexao();
		$sql  = "UPDATE cores SET nome_cor = :nome_cor, quantidade_cor = :quantidade_cor WHERE id_cor = :id_cor";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome_cor', $this->nome_cor);
		$stmt->bindParam(':quantidade_cor', $this->quantidade_cor);
		$stmt->bindParam(':id_cor', $id_cor);
		return $stmt->execute();
	}
}
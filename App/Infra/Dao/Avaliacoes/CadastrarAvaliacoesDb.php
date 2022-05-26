<?php 

namespace App\Infra\Dao\Avaliacoes;

use App\Infra\Database\Conexao;

class CadastrarAvaliacoesDb {

    public function insert(){
        $db = new Conexao();

		$sql = "INSERT INTO avaliacoes (estrela, id_produto, data_registro) VALUES (:estrela, :id_produto, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':estrela', $this->estrela);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
}
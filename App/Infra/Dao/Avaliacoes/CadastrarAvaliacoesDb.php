<?php 

namespace App\Infra\Dao\Avaliacoes;

use App\Infra\Database\Conexao;

class CadastrarAvaliacoesDb {

    public function insert(){
        $db = new Conexao();

<<<<<<< HEAD
		$sql = "INSERT INTO avaliacoes (estrela, id_produto, data_registro) VALUES (:estrela, :id_produto, NOW())";
=======
		$sql = "INSERT INTO avaliacoes (estrela, id_produto, criado_em) VALUES (:estrela, :id_produto, NOW())";
>>>>>>> 4c995b128880beea0566d0a1dfd646bf5566118e
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':estrela', $this->estrela);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
}
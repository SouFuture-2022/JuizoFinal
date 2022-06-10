<?php

namespace App\Infra\Dao\Cores;

use App\Infra\Database\Conexao;
use PDO;

class CadastrarCoresDb{

    public function insert(){
        $db = new Conexao();
		$sqlUsuario  = "INSERT INTO cores (nome_cor, quantidade_cor, id_produto, data_registro) VALUES (:nome_cor, :quantidade_cor, :id_produto, NOW())";
		$stmt = $db->getConnection()->prepare($sqlUsuario);
		$stmt->bindParam(':nome_cor', $_POST['nome_cor']);
		$stmt->bindParam(':quantidade_cor', $_POST['quantidade_cor']);
		$stmt->bindParam(':id_produto', $_POST['id_produto']);
		return $stmt->execute();
	}
}
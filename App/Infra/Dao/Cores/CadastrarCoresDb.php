<?php

namespace App\Infra\Dao\Cores;

use App\Infra\Database\Conexao;
use PDO;

class CadastrarCoresDb
{

	public function insert()
	{
		$db = new Conexao();
		$sqlUsuario  = "INSERT INTO cores (nome_cor, quantidade_cor, id_produto, criado_em) VALUES (:nome_cor, :quantidade_cor, :id_produto, NOW())";
		$stmt = $db->Conexao->prepare($sqlUsuario);
		$stmt->bindParam(':nome_cor', $this->nome_cor);
		$stmt->bindParam(':quantidade_cor', $this->quantidade_cor);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
}
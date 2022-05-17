<?php 

namespace App\Infra\Dao\Endereco;

use App\Infra\Database\Conexao;
use PDO;

class ListarEndereco{

    public function Find($id_endereco) {
        $db = new Conexao();
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll() {
        $db = new Conexao();
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
<?php 

namespace App\Infra\Dao\Endereco;

use App\Infra\Database\Conexao;
use PDO;

class CadastrarEndereco{

	public function insert(){
        $db = new Conexao();
		$sql = "INSERT INTO enderecos (numero, cep, rua, bairro, cidade, uf, id_usuario, data_registro, complemento) VALUES (:numero, :cep, :rua, :bairro, :cidade, :uf, :id_usuario, :complemento, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':complemento', $this->complemento);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		return $stmt->execute();
	}
}
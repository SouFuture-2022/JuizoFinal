<?php 

namespace App\Infra\Dao\Endereco;

use App\Infra\Database\Conexao;
use PDO;

class AlterarEndereco{
    //id_usuario não está sendo utilizado
	public function update($id_usuario) {
        $db = new Conexao();
		$sql  = "UPDATE enderecos SET nome = :nome, email = :email WHERE id = :id";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
        //id não é uma variável definida
		$stmt->bindParam(':id', $id_usuario);
		return $stmt->execute();
	}
}
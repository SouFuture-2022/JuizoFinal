<?php 

namespace Infra\Dao\Usuarios;

use Infra\Database\Conexao;

class AlterarUsuario {
    //id_usuario não é utilizado 
    public function AlterarUsuario($id_usuario) {
		$db = new Conexao();
		$sql  = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
    //id não é uma variável válida
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}
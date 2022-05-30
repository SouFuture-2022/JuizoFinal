<?php 

namespace App\Infra\Dao\Usuario;

use App\Infra\Database\Conexao;
use PDO; 

class ListarUsuarioDb{
	public function all($email){ 
		$db = new Conexao();
		$sql  = "SELECT id_usuario FROM usuarios WHERE email = :email";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt ->bindParam(':email', $email);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    public function find($id_usuario) {
        $db = new Conexao();
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
        $db = new Conexao();
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
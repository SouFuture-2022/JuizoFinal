<?php 

namespace App\Infra\Dao\Usuarios;

use App\Infra\Database\Conexao;
use PDO; 

class ListarUsuarioDb{

    public function find($id_usuario) {
        $db = new Conexao();
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
        $db = new Conexao();
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
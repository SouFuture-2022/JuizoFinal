<?php 

namespace App\Infra\Dao\Usuario;

use App\Infra\Database\Conexao;

class CadastrarUsuarioDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO usuarios (nome, perfil, cpf, telefone, data_nascimento, email, senha, data_registro) 
		VALUES (:nome, :perfil, md5(:cpf), :telefone, :data_nascimento, :email, md5(:senha), NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $_POST['nome']);
		$stmt->bindParam(':perfil', $_POST['perfil']);
		$stmt->bindParam(':cpf', $_POST['cpf']);
		$stmt->bindParam(':telefone', $_POST['telefone']);
		$stmt->bindParam(':data_nascimento', $_POST['data_nascimento']);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':senha', $_POST['senha']);
		return $stmt->execute();
	}
}
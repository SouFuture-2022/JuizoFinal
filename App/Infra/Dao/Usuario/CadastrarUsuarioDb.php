<?php 

namespace App\Infra\Dao\Usuario;

use App\Infra\Database\Conexao;

class CadastrarUsuarioDb{

    public function insert(){
		$db = new Conexao();
<<<<<<< HEAD
		$sql = "INSERT INTO usuarios (nome, perfil, cpf, telefone, data_nascimento, email, senha) 
		VALUES (:nome, :perfil, :cpf, :telefone, :data_nascimento, :email, md5(:senha))";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $_POST['nome']);
		$stmt->bindParam(':perfil', $_POST['perfil']);
		$stmt->bindParam(':cpf', $_POST['cpf']);
		$stmt->bindParam(':telefone', $_POST['telefone']);
		$stmt->bindParam(':data_nascimento', $_POST['data_nascimento']);
		$stmt->bindParam(':email', $_POST['email']);
		$stmt->bindParam(':senha', $_POST['senha']);
=======
		$sql = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, data_nascimento, sexo, perfil, criado_em) 
		VALUES (:nome, :email, md5(:senha), :telefone, :cpf, :data_nascimento, :sexo, :perfil, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':data_nascimento', $this->data_nascimento);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':perfil', $this->perfil);
>>>>>>> 4c995b128880beea0566d0a1dfd646bf5566118e
		return $stmt->execute();
	}
}
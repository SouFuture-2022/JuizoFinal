<?php 

namespace App\Infra\Dao\Usuario;

use App\Infra\Database\Conexao;

class CadastrarUsuarioDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO usuarios (nome, perfil, email, senha, telefone, cpf, data_nascimento, criado_em) 
		VALUES (:nome, :perfil, :email, md5(:senha), :telefone, :cpf, :data_nascimento, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':data_nascimento', $this->data_nascimento);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute();
	}
}
<?php 

namespace App\Infra\Dao\Usuario;

use Infra\Database\Conexao;

class CadastrarUsuarioDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, data_nascimento, sexo, perfil, criado_em) 
		VALUES (:nome, :email, md5(:senha), :telefone, :cpf, :data_nascimento, :sexo, :perfil, NOW())";
		$stmt = $db->Conexao->prepare($sql);
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
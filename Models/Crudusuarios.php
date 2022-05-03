<?php

require_once 'Conexao.php';

abstract class Crudusuarios extends Conexao {

	abstract public function insert();
	abstract public function update($id);

	public function login($email, $senha) {
		$sql  = "SELECT email, senha FROM usuarios WHERE email = :email AND senha = :senha";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':email', $email, PDO::PARAM_STR);
		$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
		$stmt->execute();

	if($stmt->rowCount() == 1) {
		$rst = $stmt->fetchAll();
		$_SESSION['email'] = $email;
		header('location: http://homolocacaominhalojinha.orgfree.com/Gerenciar');
	} else {
		echo "<script> alert('Usuário ou Senha Inválido...'); window.location='http://homolocacaominhalojinha.orgfree.com/Login'</script>";
	}
	die();
	}

	public function logout() {
		session_destroy();
		echo "<script> alert('Sessão Encerrada...'); window.location='http://homolocacaominhalojinha.orgfree.com/Login'</script>";
    }

	public function find($id_usuario) {
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
		$sql  = "SELECT nome email, senha, telefone, cpf data_nascimento, sexo FROM usuarios";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function delete($id_usuario) {
		$sql  = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

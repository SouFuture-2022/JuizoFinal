<?php

namespace App\Models;

use App\Infra\Database\Conexao;
use PDO;

abstract class Crudusuarios{

	abstract public function insert();
	abstract public function update($id);

	public function login($email, $senha) {
		$db = new Conexao();
		$sql  = "SELECT email, senha FROM usuarios WHERE email = :email AND senha = :senha";
		$stmt = $db->Conexao->prepare($sql);
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
}

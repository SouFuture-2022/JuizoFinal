<?php

namespace App\Models;

use App\Infra\Database\Conexao;

class SessionLogin{

	public function login($email, $senha) {
		$db = new Conexao();
		$sql  = "SELECT email, senha FROM usuarios WHERE email = '$email' and senha = '$senha'";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam($email, $_POST ['email']);
		$stmt->bindParam($senha, $_POST ['senha']);
		$stmt->execute();
		return $stmt;
	}

	

	public function logout() {
		session_destroy();
		echo "<script> alert('Sessão Encerrada...'); window.location='http://homolocacaominhalojinha.orgfree.com/Login'</script>";
    }
}

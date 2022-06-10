<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;
use PDO;

class ListarFavoritosDb{

    public function Find($id_usuario) {
		$db = new Conexao();
		$sql  = "SELECT id_produto FROM favoritos WHERE id_usuario = :id_usuario";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAll() {
		$db = new Conexao();
		$sql  = "SELECT id_usuario, id_produto FROM favoritos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findProd($id_produto, $id_usuario) {
		$db = new Conexao();
		$sql  = "SELECT id_produto FROM favoritos WHERE id_produto = :id_produto and id_usuario = :id_usuario";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
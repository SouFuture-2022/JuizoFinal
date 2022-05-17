<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;
use PDO;

class ListarFavoritosDb{

    public function Find($id_favorito) {
		$db = new Conexao();
		$sql  = "SELECT id_usuario, id_produto FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll() {
		$db = new Conexao();
		$sql  = "SELECT id_usuario, id_produto FROM favoritos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
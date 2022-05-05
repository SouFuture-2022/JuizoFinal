<?php 

namespace Infra\Dao\Favoritos;
use Infra\Database\Conexao;
use PDO;

class Find_FavoritosDb{

    public function Find($id_favorito) {
		$db = new Conexao();
		$sql  = "SELECT id_usuario, id_produto FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll() {
		$db = new Conexao();
		$sql  = "SELECT id_usuario, id_produto FROM favoritos";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
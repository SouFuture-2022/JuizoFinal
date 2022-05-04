<?php 

namespace Infra\Dao\Favoritos;
use Infra\Database\Conexao;
use PDO;

class Find_Favoritos{

    public function Find($id_favorito) {
		$sql  = "SELECT id_usuario, id_produto FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll() {
		$sql  = "SELECT id_usuario, id_produto FROM favoritos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
}
<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;
use PDO;

class RemoverFavoritosDb{

    public function delete($id_favorito) {
		$db = new Conexao();
		$sql  = "DELETE FROM favoritos WHERE id_favorito = :id_favorito";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_favorito', $id_favorito, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
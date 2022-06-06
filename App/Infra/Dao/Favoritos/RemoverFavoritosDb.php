<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;
use PDO;

class RemoverFavoritosDb{

    public function delete($id_usuario, $id_produto) {
		$db = new Conexao();
		$sql  = "DELETE FROM favoritos WHERE id_usuario = :id_usuario and id_produto = :id_produto";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
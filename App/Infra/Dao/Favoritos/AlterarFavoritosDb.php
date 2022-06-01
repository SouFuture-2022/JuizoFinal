<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;
use PDO;

class AlterarFavoritosDb{

    public function update($id_favorito) {
		$db = new Conexao();
		$sql  = "UPDATE favoritos SET id_usuario = :id_usuario, id_produto = :id_produto WHERE id_favorito = :id_favorito";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		$stmt->bindParam(':id_favorito', $id_favorito);
		return $stmt->execute();
	}
}
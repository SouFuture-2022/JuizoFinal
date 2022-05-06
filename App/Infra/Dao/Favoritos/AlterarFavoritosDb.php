<?php 

namespace Infra\Dao\Favoritos;
use Infra\Database\Conexao;
use PDO;

class AlterarFavoritos{

    public function AlterarFavoritos($id_favorito) {
		$db = new Conexao();
		$sql  = "UPDATE favoritos SET id_usuario = :id_usuario, id_produto = :id_produto WHERE id_favorito = :id_favorito";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		$stmt->bindParam(':id_favorito', $id_favorito);
		return $stmt->execute();
	}
}
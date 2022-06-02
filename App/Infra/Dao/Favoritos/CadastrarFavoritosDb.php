<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;

class CadastrarFavoritosDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO favoritos (id_usuario, id_produto, data_registro) VALUES (:id_usuario, :id_produto, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
	
}
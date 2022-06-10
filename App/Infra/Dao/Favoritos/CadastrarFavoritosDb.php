<?php 

namespace App\Infra\Dao\Favoritos;

use App\Infra\Database\Conexao;

class CadastrarFavoritosDb{

    public function insert($id_usuario, $id_produto){
		$db = new Conexao();
		$sql = "INSERT INTO favoritos (id_usuario, id_produto) VALUES ('$id_usuario' , '$id_produto')";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam('$id_usuario', $_POST['id_usuario']);
		$stmt->bindParam('$id_produto', $_POST['id_produto']);
		return $stmt->execute();
	}
	
}



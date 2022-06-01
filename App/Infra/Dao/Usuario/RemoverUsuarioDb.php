<?php 

namespace App\Infra\Dao\Usuarios;

use App\Infra\Database\Conexao;
use PDO; 

class RemoverUsuarioDb{

    public function delete($id_usuario) {
		$db = new Conexao();
		$sql  = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
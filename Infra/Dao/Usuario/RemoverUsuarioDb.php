<?php 

namespace Infra\Dao\Usuarios;

use Infra\Database\Conexao;
use PDO; 

class RemoverUsuario{

    public function delete($id_usuario) {
		$db = new Conexao();
		$sql  = "DELETE FROM usuarios WHERE id_usuario = :id_usuario";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_usuario', $id_usuario, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
<?php 

namespace App\Infra\Dao\Imagens;

use App\Infra\Database\Conexao;
use PDO;

class RemoverImagensDb{

    public function delete($id_imagem) {
		$db = new Conexao();
		$sql  = "DELETE FROM usuarios WHERE id_imagem = :id_imagem";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_imagem', $id_imagem, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
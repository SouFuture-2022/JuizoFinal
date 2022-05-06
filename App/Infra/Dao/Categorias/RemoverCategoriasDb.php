<?php 

namespace App\Infra\Dao\Categorias;
use Infra\Database\Conexao;
use PDO;

class RemoverCategoriasDb{

	public function delete($id_categoria) {
		$db = new Conexao();
		$sql  = "DELETE FROM categorias WHERE id_categoria = :id_categoria";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
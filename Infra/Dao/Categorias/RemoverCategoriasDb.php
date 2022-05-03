<?php 

namespace Infra\Dao\Categorias;
use Infra\Database\Conexao;
use PDO;

class RemoverCategorias{

	public function RemoverCategorias($id_categoria) {
		$sql  = "DELETE FROM categorias WHERE id_categoria = :id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
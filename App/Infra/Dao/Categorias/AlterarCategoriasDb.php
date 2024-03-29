<?php  

namespace App\Infra\Dao\Categorias;

use App\Infra\Database\Conexao;

class AlterarCategoriasDb{

    public function update($id_categoria) {
		$db = new Conexao();
		$sql  = "UPDATE categorias SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome_categoria', $this->nome_categoria);
		$stmt->bindParam(':id_categoria', $id_categoria);
		return $stmt->execute();
	}
}
<?php  

namespace Infra\Dao\Categorias;

use Infra\Database\Conexao;

class AlterarCategorias{

    public function AlterarCategorias($id_categoria) {
		$db = new Conexao();
		$sql  = "UPDATE categorias SET nome_categoria = :nome_categoria WHERE id_categoria = :id_categoria";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome_categoria', $this->nome_categoria);
		$stmt->bindParam(':id_categoria', $id_categoria);
		return $stmt->execute();
	}
}
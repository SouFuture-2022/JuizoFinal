<?php  

namespace App\Infra\Dao\Produto;

use App\Infra\Database\Conexao;
use PDO;

class RemoverProdutoDb {

    public function delete($id_produto) {
		$db = new Conexao();
		$sql  = "DELETE FROM produtos WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
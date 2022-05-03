<?php  

namespace Infra\Dao\Produto;
use Infra\Database\Conexao;
use PDO;

class RemoverProduto {

    public function RemoverProduto($id_produto) {
		$sql  = "DELETE FROM produtos WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
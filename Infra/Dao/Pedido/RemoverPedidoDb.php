<?php 

namespace Infra\Dao\Pedido; 

use Infra\Database\Conexao;
use PDO;

class RemoverPedidoDb{

    public function delete($id_pedido) {
		$db = new Conexao();
		$sql  = "DELETE FROM pedidos WHERE id_pedido = :id_pedido";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
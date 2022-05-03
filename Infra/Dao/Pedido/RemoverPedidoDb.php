<?php 

namespace Infra\Dao\Pedido; 

use Infra\Database\Conexao;
use PDO;

class RemoverPedido{

    public function RemoverPedido($id_pedido) {
		$sql  = "DELETE FROM pedidos WHERE id_pedido = :id_pedido";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
	
}
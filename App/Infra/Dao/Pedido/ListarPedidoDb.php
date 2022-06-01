<?php 

namespace App\Infra\Dao\Pedido; 

use App\Infra\Database\Conexao;
use PDO;

class ListarPedidoDb{

    public function find($id_pedido) {
		$db = new Conexao();
		$sql  = "SELECT id_pedido, num_pedido, produto, cor, tamanho, quantidade, preco, sub_total, data_pedido, id_produto, id_usuario FROM pedidos WHERE id_pedido = :id_pedido";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function findAll() {
		$db = new Conexao();
		$sql  = "SELECT id_pedido, num_pedido, produto, cor, tamanho, quantidade, preco, sub_total, data_pedido, id_produto, id_usuario FROM pedidos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCountShopping($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT SUM(quantidade) FROM pedidos WHERE id_produto =:id_produto";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
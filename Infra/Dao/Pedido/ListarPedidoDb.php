<?php 

namespace Infra\Dao\Pedido; 

use Infra\Database\Conexao;
use PDO;

class Find_Pedido{

    public function Find($id_pedido) {
		$sql  = "SELECT id_pedido, num_pedido, produto, cor, tamanho, quantidade, preco, sub_total, data_pedido, id_produto, id_usuario FROM pedidos WHERE id_pedido = :id_pedido";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_pedido', $id_pedido, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll() {
		$sql  = "SELECT id_pedido, num_pedido, produto, cor, tamanho, quantidade, preco, sub_total, data_pedido, id_produto, id_usuario FROM pedidos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllCountShopping($id_produto) {
		$sql  = "SELECT SUM(quantidade) FROM pedidos WHERE id_produto =:id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}
}
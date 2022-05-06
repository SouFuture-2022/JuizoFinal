<?php 

namespace App\Infra\Dao\Pedido; 

use Infra\Database\Conexao;

class CadastrarPedidoDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO pedidos (num_pedido, nome, cor, tamanho, quantidade, preco, sub_total, id_produto, id_usuario, data_pedido) 
		VALUES (:num_pedido, :nome, :cor, :tamanho, :quantidade, :preco, :sub_total, :id_produto, :id_usuario, NOW())";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':num_pedido', $this->num_pedido);
		$stmt->bindParam(':nome', $this->name);
		$stmt->bindParam(':cor', $this->color);
		$stmt->bindParam(':tamanho', $this->size);
		$stmt->bindParam(':quantidade', $this->amount);
		$stmt->bindParam(':preco', $this->price);
		$stmt->bindParam(':sub_total', $this->total);
		$stmt->bindParam(':id_produto', $this->id_product);
		$stmt->bindParam(':id_usuario', $this->id_user);
		return $stmt->execute();
	}
	
}
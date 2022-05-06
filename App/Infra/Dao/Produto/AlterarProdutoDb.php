<?php  

namespace App\Infra\Dao\Produto;

use Infra\Database\Conexao;
use PDO;

class AlterarProdutoDb{

    public function update($id_produto) {
		$db = new Conexao();
		$sql  = "UPDATE produtos SET nome = :nome, habilitar_cor = :habilitar_cor, habilitar_tamanho = :habilitar_tamanho, preco = :preco, 
		quantidade = :quantidade, peso = :peso, descricao = :descricao WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':habilitar_cor', $this->habilitar_cor);
		$stmt->bindParam(':habilitar_tamanho', $this->habilitar_tamanho);
		$stmt->bindParam(':preco', $this->preco);
		$stmt->bindParam(':quantidade', $this->quantidade);
		$stmt->bindParam(':peso', $this->peso);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}

	public function updateCor($id_produto) {
		$db = new Conexao();
		$sql  = "UPDATE produtos SET cor = :cor WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}

	public function updateTamanho($id_produto) {
		$db = new Conexao();
		$sql  = "UPDATE produtos SET tamanho = :tamanho WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}

	public function updateStock($amount, $id_product) {
		$db = new Conexao();
		$sql  = "UPDATE produtos SET quantidade = quantidade - :amount WHERE id_produto = :id_product";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
		$stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
		return $stmt->execute();
	}
}
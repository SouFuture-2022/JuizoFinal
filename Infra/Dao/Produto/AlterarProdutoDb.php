<?php  

namespace Infra\Dao\Produto;
use Infra\Database\Conexao;
use PDO;

class AlterarProduto{

    public function AlterarProduto($id_produto) {
		$sql  = "UPDATE produtos SET nome = :nome, habilitar_cor = :habilitar_cor, habilitar_tamanho = :habilitar_tamanho, preco = :preco, 
		quantidade = :quantidade, peso = :peso, descricao = :descricao WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
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
}

class AlterarCor{

	public function AlterarCor($id_produto) {
		$sql  = "UPDATE produtos SET cor = :cor WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}
}

class AlterarTamanho{

	public function AlterarTamanho($id_produto) {
		$sql  = "UPDATE produtos SET tamanho = :tamanho WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}
}

class AlterarEstoque{

	public function AlterarEstoque($amount, $id_product) {
		$sql  = "UPDATE produtos SET quantidade = quantidade - :amount WHERE id_produto = :id_product";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
		$stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
		return $stmt->execute();
	}
	
}
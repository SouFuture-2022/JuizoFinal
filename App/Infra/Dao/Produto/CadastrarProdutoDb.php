<?php  

namespace App\Infra\Dao\Produto;

use App\Infra\Database\Conexao;

class CadastrarProdutoDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO produtos (nome, imagem_destaque, habilitar_cor, habilitar_tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria, criado_em) 
		VALUES (:nome, :imagem_destaque, :habilitar_cor, :habilitar_tamanho, :preco, :quantidade, :peso, :un_medida, :descricao, :id_categoria, NOW())";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':imagem_destaque', $this->imagem_destaque);
		$stmt->bindParam(':habilitar_cor', $this->habilitar_cor);
		$stmt->bindParam(':habilitar_tamanho', $this->habilitar_tamanho);
		$stmt->bindParam(':preco', $this->preco);
		$stmt->bindParam(':quantidade', $this->quantidade);
		$stmt->bindParam(':peso', $this->peso);
		$stmt->bindParam(':un_medida', $this->un_medida);
		$stmt->bindParam(':descricao', $this->descricao);
		$stmt->bindParam(':id_categoria', $this->id_categoria);
		return $stmt->execute();
	}
}
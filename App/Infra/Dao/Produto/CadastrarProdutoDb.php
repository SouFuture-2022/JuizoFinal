<?php  

namespace App\Infra\Dao\Produto;

use App\Infra\Database\Conexao;

class CadastrarProdutoDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO produtos (nome, imagem_destaque, habilitar_cor, habilitar_tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria, data_registro) 
		VALUES (:nome, :imagem_destaque, :habilitar_cor, :habilitar_tamanho, :preco, :quantidade, :peso, :un_medida, :descricao, :id_categoria, NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome', $_POST['nome']);
		$stmt->bindParam(':imagem_destaque', $_POST['imagem_destaque']);
		$stmt->bindParam(':habilitar_cor', $_POST['habilitar_cor']);
		$stmt->bindParam(':habilitar_tamanho', $_POST['habilitar_tamanho']);
		$stmt->bindParam(':preco', $_POST['preco']);
		$stmt->bindParam(':quantidade', $_POST['quantidade']);
		$stmt->bindParam(':peso', $_POST['peso']);
		$stmt->bindParam(':un_medida', $this->un_medida);
		$stmt->bindParam(':descricao', $_POST['descricao']);
		$stmt->bindParam(':id_categoria', $_POST['id_categoria']);
		return $stmt->execute();
	}
}
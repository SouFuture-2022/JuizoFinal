<?php  

namespace Infra\Dao\Produto;
use Infra\Database\Conexao;
use PDO;

class Find{

    public function Find($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_produto = :id_produto";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll($inicio, $quantidade_pagina) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos ORDER BY id_produto DESC LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
    
	public function FindAllPopular($inicio, $quantidade_pagina) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllRelated($inicio, $quantidade_pagina, $id_categoria) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_categoria = :id_categoria LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllProduct() {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos ORDER BY nome ASC";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllProductCategories($id_categoria) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, preco, descricao, id_categoria FROM produtos WHERE id_categoria =:id_categoria ORDER BY nome ASC";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllSearch($buscar) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos WHERE nome LIKE '%$buscar%'";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function FindAllCount() {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM produtos";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function FindAllCountProduct($id_categoria) {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM produtos WHERE id_categoria =:id_categoria";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function FindAllSelect() {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
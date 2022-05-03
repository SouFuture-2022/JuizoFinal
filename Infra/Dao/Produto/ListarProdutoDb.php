<?php  

namespace Infra\Dao\Produto;
use Infra\Database\Conexao;
use PDO;

class Find_Produto{

    public function Find($id_produto) {
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function FindAll($inicio, $quantidade_pagina) {
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos ORDER BY id_produto DESC LIMIT $inicio, $quantidade_pagina";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
    
	public function FindAllPopular($inicio, $quantidade_pagina) {
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos LIMIT $inicio, $quantidade_pagina";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllRelated($inicio, $quantidade_pagina, $id_categoria) {
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_categoria = :id_categoria LIMIT $inicio, $quantidade_pagina";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllProduct() {
		$sql  = "SELECT id_produto, nome FROM produtos ORDER BY nome ASC";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllProductCategories($id_categoria) {
		$sql  = "SELECT id_produto, nome, imagem_destaque, preco, descricao, id_categoria FROM produtos WHERE id_categoria =:id_categoria ORDER BY nome ASC";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllSearch($buscar) {
		$sql  = "SELECT id_produto, nome FROM produtos WHERE nome LIKE '%$buscar%'";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCount() {
		$sql  = "SELECT COUNT(id_produto) FROM produtos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllCountProduct($id_categoria) {
		$sql  = "SELECT COUNT(id_produto) FROM produtos WHERE id_categoria =:id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllSelect() {
		$sql  = "SELECT id_produto, nome FROM produtos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
}
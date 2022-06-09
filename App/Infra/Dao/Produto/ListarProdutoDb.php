<?php  

namespace App\Infra\Dao\Produto;

use App\Infra\Database\Conexao;
use PDO;

class ListarProdutoDb{

	public function printAll(){
		$db = new Conexao();
		$sql  = "SELECT nome FROM produtos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt;
	}

    public function find($id_produto) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_produto = :id_produto";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAll($inicio, $quantidade_pagina) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos ORDER BY id_produto DESC LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
    
	public function findAllPopular($inicio, $quantidade_pagina) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllRelated($inicio, $quantidade_pagina, $id_categoria) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, habilitar_cor, habilitar_tamanho, cor, tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria FROM produtos WHERE id_categoria = :id_categoria LIMIT $inicio, $quantidade_pagina";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllProduct() {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos ORDER BY nome ASC";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllProductCategories() {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome, imagem_destaque, preco, descricao, id_categoria FROM produtos" ;
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	//WHERE id_categoria =:id_categoria ORDER BY nome ASC"
	public function findAllSearch($buscar) {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos WHERE nome LIKE '%$buscar%'";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public function findAllCount() {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM produtos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllCountProduct($id_categoria) {
		$db = new Conexao();
		$sql  = "SELECT COUNT(id_produto) FROM produtos WHERE id_categoria =:id_categoria";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

	public function findAllSelect() {
		$db = new Conexao();
		$sql  = "SELECT id_produto, nome FROM produtos";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
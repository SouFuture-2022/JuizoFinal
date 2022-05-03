<?php

require_once 'Crudprodutos.php';

class Produtos extends Crudprodutos {

	private $nome;
	private $imagem_destaque;
	private $habilitar_cor;
	private $habilitar_tamanho;
	private $cor;
	private $tamanho;
	private $preco;
	private $quantidade;
	private $peso;
	private $un_medida;
	private $descricao;
	private $id_categoria;

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setImagem($imagem_destaque) {
		$this->imagem_destaque = $imagem_destaque;
	}

	public function getImagem() {
		return $this->imagem_destaque;
	}

	public function setHabilitarcor($habilitar_cor) {
		$this->habilitar_cor = $habilitar_cor;
	}
	
	public function getHabilitarcor() {
		return $this->habilitar_cor;
	}

	public function setHabilitartamanho($habilitar_tamanho) {
		$this->habilitar_tamanho = $habilitar_tamanho;
	}
	
	public function getHabilitartamanho() {
		return $this->habilitar_tamanho;
	}

	public function setCor($cor) {
		$this->cor = $cor;
	}

	public function getCor() {
		return $this->cor;
	}

	public function setTamanho($tamanho) {
		$this->tamanho = $tamanho;
	}

	public function getTamanho() {
		return $this->tamanho;
	}

	public function setPreco($preco) {
		$this->preco = $preco;
	}

	public function getPreco() {
		return $this->preco;
	}

	public function setQuantidade($quantidade) {
		$this->quantidade = $quantidade;
	}

	public function getQuantidade() {
		return $this->quantidade;
	}

	public function setPeso($peso) {
		$this->peso = $peso;
	}

	public function getPeso() {
		return $this->peso;
	}

	public function setUnmedida($un_medida) {
		$this->un_medida = $un_medida;
	}

	public function getUnmedida() {
		return $this->un_medida;
	}

	public function setDescricao($descricao) {
		$this->descricao = $descricao;
	}

	public function getDescricao() {
		return $this->descricao;
	}
	
	public function setIdcategoria($id_categoria) {
		$this->id_categoria = $id_categoria;
	}

	public function getIdcategoria() {
		return $this->id_categoria;
	}

	public function insert(){
		$sql = "INSERT INTO produtos (nome, imagem_destaque, habilitar_cor, habilitar_tamanho, preco, quantidade, peso, un_medida, descricao, id_categoria, criado_em) 
		VALUES (:nome, :imagem_destaque, :habilitar_cor, :habilitar_tamanho, :preco, :quantidade, :peso, :un_medida, :descricao, :id_categoria, NOW())";
		$stmt = Conexao::prepare($sql);
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

	public function update($id_produto) {
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

	public function updateCor($id_produto) {
		$sql  = "UPDATE produtos SET cor = :cor WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':cor', $this->cor);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}

	public function updateTamanho($id_produto) {
		$sql  = "UPDATE produtos SET tamanho = :tamanho WHERE id_produto = :id_produto";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':tamanho', $this->tamanho);
		$stmt->bindParam(':id_produto', $id_produto);
		return $stmt->execute();
	}

	public function updateStock($amount, $id_product) {
		$sql  = "UPDATE produtos SET quantidade = quantidade - :amount WHERE id_produto = :id_product";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
		$stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT);
		return $stmt->execute();
	}
}

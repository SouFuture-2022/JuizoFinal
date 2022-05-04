<?php

require_once 'Crudenderecos.php';

class Enderecos extends Crudenderecos {

	private $numero;
	private $cep;
	private $rua;
	private $bairro;
	private $cidade;
	private $uf;
	private $id_usuario;

	public function setNumero($numero) {
		$this->numero = $numero;
	}

	public function getNumero() {
		return $this->numero;
	}

	public function setCep($cep) {
		$this->cep = $cep;
	}

	public function getCep() {
		return $this->cep;
	}
	
	public function setRua($rua) {
		$this->rua = $rua;
	}

	public function getRua() {
		return $this->rua;
	}

	public function setBairro($bairro) {
		$this->bairro = $bairro;
	}

	public function getBairro() {
		return $this->bairro;
	}

	public function setCidade($cidade) {
		$this->cidade = $cidade;
	}

	public function getCidade() {
		return $this->cidade;
	}

	public function setUf($uf) {
		$this->uf = $uf;
	}

	public function getUf() {
		return $this->uf;
	}

	public function setIdusuario($id_usuario) {
		$this->id_usuario = $id_usuario;
	}

	public function getIdusuario() {
		return $this->id_usuario;
	}

	public function insert(){
		$sql = "INSERT INTO enderecos (numero, cep, rua, bairro, cidade, uf, id_usuario, criado_em) VALUES (:numero, :cep, :rua, :bairro, :cidade, :uf, :id_usuario, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':numero', $this->numero);
		$stmt->bindParam(':cep', $this->cep);
		$stmt->bindParam(':rua', $this->rua);
		$stmt->bindParam(':bairro', $this->bairro);
		$stmt->bindParam(':cidade', $this->cidade);
		$stmt->bindParam(':uf', $this->uf);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		return $stmt->execute();
	}

	public function update($id_usuario) {
		$sql  = "UPDATE enderecos SET nome = :nome, email = :email WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}

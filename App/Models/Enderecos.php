<?php

namespace App\Models;

class Enderecos{

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
}

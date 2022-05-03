<?php

require_once 'Crudusuarios.php';

class Usuarios extends Crudusuarios {

	private $nome;
	private $email;
	private $senha;
	private $telefone;
	private $cpf;
	private $data_nascimento;
	private $sexo;
	private $perfil;

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function getNome() {
		return $this->nome;
	}

	public function setEmail($email) {
		$this->email = $email;
	}
	
	public function getEmail() {
		return $this->email;
	}

	public function setSenha($senha) {
		$this->senha = $senha;
	}

	public function getSenha() {
		return $this->senha;
	}

	public function setTelefone($telefone) {
		$this->telefone = $telefone;
	}

	public function getTelefone() {
		return $this->telefone;
	}	

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}

	public function getCpf() {
		return $this->cpf;
	}

	public function setDatanascimento($data_nascimento) {
		$this->data_nascimento = $data_nascimento;
	}

	public function getDatanascimento() {
		return $this->data_nascimento;
	}

	public function setSexo($sexo) {
		$this->sexo = $sexo;
	}

	public function getSexo() {
		return $this->sexo;
	}

	public function setPerfil($perfil) {
		$this->perfil = $perfil;
	}

	public function getPerfil() {
		return $this->perfil;
	}

	public function insert(){
		$sql = "INSERT INTO usuarios (nome, email, senha, telefone, cpf, data_nascimento, sexo, perfil, criado_em) 
		VALUES (:nome, :email, md5(:senha), :telefone, :cpf, :data_nascimento, :sexo, :perfil, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':senha', $this->senha);
		$stmt->bindParam(':telefone', $this->telefone);
		$stmt->bindParam(':cpf', $this->cpf);
		$stmt->bindParam(':data_nascimento', $this->data_nascimento);
		$stmt->bindParam(':sexo', $this->sexo);
		$stmt->bindParam(':perfil', $this->perfil);
		return $stmt->execute();
	}

	public function update($id_usuario) {
		$sql  = "UPDATE usuarios SET nome = :nome, email = :email WHERE id = :id";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome', $this->nome);
		$stmt->bindParam(':email', $this->email);
		$stmt->bindParam(':id', $id);
		return $stmt->execute();
	}
}

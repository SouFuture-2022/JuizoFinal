<?php

namespace App\Models;

class Usuarios
{

	private $nome;
	private $email;
	private $senha;
	private $telefone;
	private $cpf;
	private $data_nascimento;
	private $sexo;
	private $perfil;

	public function setNome($nome)
	{
		$this->nome = $nome;
	}

	public function getNome()
	{
		return $this->nome;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setSenha($senha)
	{
		$this->senha = $senha;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function setTelefone($telefone)
	{
		$this->telefone = $telefone;
	}

	public function getTelefone()
	{
		return $this->telefone;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

	public function getCpf()
	{
		return $this->cpf;
	}

	public function setDatanascimento($data_nascimento)
	{
		$this->data_nascimento = $data_nascimento;
	}

	public function getDatanascimento()
	{
		return $this->data_nascimento;
	}

	public function setSexo($sexo)
	{
		$this->sexo = $sexo;
	}

	public function getSexo()
	{
		return $this->sexo;
	}

	public function setPerfil($perfil)
	{
		$this->perfil = $perfil;
	}

	public function getPerfil()
	{
		return $this->perfil;
	}
}
<?php 
//Listar endereços
use Infra\Database\Conexao;

class Find{
    	public function find($id_endereco) {
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}
}
class FindAll{
    	public function findAll() {
		$sql  = "SELECT numero, cep, rua, bairro, cidade, uf FROM enderecos";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}
}
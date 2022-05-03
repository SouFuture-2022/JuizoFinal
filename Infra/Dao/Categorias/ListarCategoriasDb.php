<?php 

namespace Infra\Dao\Categorias;
use Infra\Database\Conexao;
use PDO;

class Find_Categorias{

    public function Find($id_categoria) {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE id_categoria = :id_categoria";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
		$stmt->execute();
		return $stmt->fetch();
	}

    public function FindAll() {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias ORDER BY nome_categoria DESC";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

    public function FindAllCount() {
		$sql  = "SELECT COUNT(id_categoria) FROM categorias";
		$stmt = Conexao::prepare($sql);
		$stmt->execute();
		return $stmt->fetchColumn();
	}

    public function FindAllSearch($buscar) {
		$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE nome_categoria LIKE '%$buscar%'";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
}
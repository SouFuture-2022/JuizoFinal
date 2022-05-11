<?php 

	namespace App\Infra\Dao\Categorias;
	
	use App\Infra\Database\Conexao;
	use PDO;
	
	class ListarCategoriasDb{
	
		public function find($id_categoria) {
			$db = new Conexao();
			$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE id_categoria = :id_categoria";
			$stmt = $db->Conexao->prepare($sql);
			$stmt->bindParam(':id_categoria', $id_categoria, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
		}
	
		public function findAll() {
			$db = new Conexao();
			$sql  = "SELECT id_categoria, nome_categoria FROM categorias ORDER BY nome_categoria DESC";
			$stmt = $db->Conexao->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	
		public function findAllCount() {
			$db = new Conexao();
			$sql  = "SELECT COUNT(id_categoria) FROM categorias";
			$stmt = $db->Conexao->prepare($sql);
			$stmt->execute();
			return $stmt->fetchColumn();
		}
	
		public function findAllSearch($buscar) {
			$db = new Conexao();
			$sql  = "SELECT id_categoria, nome_categoria FROM categorias WHERE nome_categoria LIKE '%$buscar%'";
			$stmt = $db->Conexao->prepare($sql);
			$stmt->bindParam(':buscar', $buscar, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
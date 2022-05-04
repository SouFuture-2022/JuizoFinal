<?php 

namespace Infra\Dao\Favoritos;
use Infra\Database\Conexao;
use PDO;

class CadastrarFavoritos{

    public function CadastrarFavoritos(){
		$sql = "INSERT INTO favoritos (id_usuario, id_produto, criado_em) VALUES (:id_usuario, :id_produto, NOW())";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_usuario', $this->id_usuario);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
	
}
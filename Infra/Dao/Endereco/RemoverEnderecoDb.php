<?php 
namespace Infra\Dao\Endereco;
use Infra\database\Conexao;
use PDO;

//deleteendereços
class Delete_Endereco{
    public function delete($id_endereco) {
		$sql  = "DELETE FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}

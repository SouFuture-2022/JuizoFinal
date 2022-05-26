<?php 

namespace App\Infra\Dao\Endereco;

use App\Infra\Database\Conexao;
use PDO;

class RemoverEndereco{

    public function delete($id_endereco) {
        $db = new Conexao();
		$sql  = "DELETE FROM enderecos WHERE id_endereco = :id_endereco";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':id_endereco', $id_endereco, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
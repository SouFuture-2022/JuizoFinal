<?php 

namespace App\Infra\Dao\Imagens;

use App\Infra\Database\Conexao;

class CadastrarImagensDb{

    public function insert(){
		$db = new Conexao();
<<<<<<< HEAD
		$sql = "INSERT INTO imagens (nome_imagem, id_produto, data_registro) VALUES (:nome_imagem, :id_produto, NOW())";
=======
		$sql = "INSERT INTO imagens (nome_imagem, id_produto, criado_em) VALUES (:nome_imagem, :id_produto, NOW())";
>>>>>>> 4c995b128880beea0566d0a1dfd646bf5566118e
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
}
<?php 

namespace App\Infra\Dao\Imagens;

use App\Infra\Database\Conexao;

class CadastrarImagensDb{

    public function insert($id_produto, $nome_imagem){
		$db = new Conexao();
		$sql = "INSERT INTO imagens (nome_imagem, id_produto, data_registro) VALUES ('$nome_imagem', '$id_produto', NOW())";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam($nome_imagem, $_POST['nome_imagem']);
		$stmt->bindParam($id_produto, $_POST['id_produto']);
		return $stmt->execute();
	}
}
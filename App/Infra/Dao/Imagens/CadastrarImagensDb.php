<?php 

namespace App\Infra\Dao\Imagens;

use Infra\Database\Conexao;

class CadastrarImagensDb{

    public function insert(){
		$db = new Conexao();
		$sql = "INSERT INTO imagens (nome_imagem, id_produto, criado_em) VALUES (:nome_imagem, :id_produto, NOW())";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_produto', $this->id_produto);
		return $stmt->execute();
	}
}
<?php 

namespace App\Infra\Dao\Imagens;

use Infra\Database\Conexao;
use PDO;

class AlterarImagensDb{

    public function update($id_imagem) {
		$db = new Conexao();
		$sql  = "UPDATE imagens SET nome_imagem = :nome_imagem WHERE id_imagem = :id_imagem";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_imagem', $id_imagem);
		return $stmt->execute();
	}
}
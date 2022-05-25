<?php 

namespace App\Infra\Dao\Imagens;

use App\Infra\Database\Conexao;
use PDO;

class AlterarImagensDb{

    public function update($id_imagem) {
		$db = new Conexao();
		$sql  = "UPDATE imagens SET nome_imagem = :nome_imagem WHERE id_imagem = :id_imagem";
		$stmt = $db->getConnection()->prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_imagem', $id_imagem);
		return $stmt->execute();
	}
}
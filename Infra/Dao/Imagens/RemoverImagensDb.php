<?php 

namespace Infra\Dao\Imagens;

use Infra\Database\Conexao;
use PDO;

class RemoverImagens{

    public function RemoverImagens($id_imagem) {
		$db = new Conexao();
		$sql  = "DELETE FROM usuarios WHERE id_imagem = :id_imagem";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':id_imagem', $id_imagem, PDO::PARAM_INT);
		return $stmt->execute(); 
	}
}
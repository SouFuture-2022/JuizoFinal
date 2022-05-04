<?php 

namespace Infra\Dao\Imagens;

use Infra\Database\Conexao;
use PDO;

class AlterarImagens{

    public function AlterarImagens($id_imagem) {
		$sql  = "UPDATE imagens SET nome_imagem = :nome_imagem WHERE id_imagem = :id_imagem";
		$stmt = Conexao::prepare($sql);
		$stmt->bindParam(':nome_imagem', $this->nome_imagem);
		$stmt->bindParam(':id_imagem', $id_imagem);
		return $stmt->execute();
	}
	
}
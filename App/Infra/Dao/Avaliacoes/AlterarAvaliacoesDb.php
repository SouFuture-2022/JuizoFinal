<?php 

namespace App\Infra\Dao\Avaliacoes;

use Infra\Database\Conexao;

class AlterarAvaliacoesDb {

    public function update($id_avaliacao) {
        $db = new Conexao();

		$sql  = "UPDATE avaliacoes SET estrela = :estrela WHERE id_avaliacao = :id_avaliacao";
		$stmt = $db->Conexao->prepare($sql);
		$stmt->bindParam(':estrela', $this->estrela);
		$stmt->bindParam(':id_produto', $this->id_produto);
		$stmt->bindParam(':id_avaliacao', $id_avaliacao);
		return $stmt->execute();
	}
}
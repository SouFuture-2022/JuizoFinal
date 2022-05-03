<?php 

namespace Infra\Dao\Avaliacoes;
use Infra\Database\conexao;

class Update{
    public function update($id_avaliacao) {
    $sql  = "UPDATE avaliacoes SET estrela = :estrela WHERE id_avaliacao = :id_avaliacao";
    $stmt = Conexao::prepare($sql);
    $stmt->bindParam(':estrela', $this->estrela);
    $stmt->bindParam(':id_produto', $this->id_produto);
    $stmt->bindParam(':id_avaliacao', $id_avaliacao);
    return $stmt->execute();
}
}

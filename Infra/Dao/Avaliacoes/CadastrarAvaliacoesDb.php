<?php 

namespace Infra\Dao\Avaliacoes;
use Infra\Database\conexao;

class Insert{
    public function insert(){
    $sql = "INSERT INTO avaliacoes (estrela, id_produto, criado_em) VALUES (:estrela, :id_produto, NOW())";
    $stmt = Conexao::prepare($sql);
    $stmt->bindParam(':estrela', $this->estrela);
    $stmt->bindParam(':id_produto', $this->id_produto);
    return $stmt->execute();
}
}
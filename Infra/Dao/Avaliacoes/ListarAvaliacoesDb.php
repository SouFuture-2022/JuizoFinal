<?php 

namespace Infra\Dao\Avaliacoes;
use PDO;
use Infra\Database\Conexao;

class Find{
    public function find($id_produto) {
    $sql  = "SELECT AVG(estrela) FROM avaliacoes WHERE id_produto = :id_produto";
    $stmt = Conexao::prepare($sql);
    $stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchColumn();
}
}


class FindAll{
    public function findAll() {
    $sql  = "SELECT id_avaliacao, estrela , id_produto FROM avaliacoes";
    $stmt = Conexao::prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
}


Class FindAllCount{
    public function findAllCount($id_produto) {
    $sql  = "SELECT COUNT(id_produto) FROM avaliacoes WHERE id_produto =:id_produto";
    $stmt = Conexao::prepare($sql);
    $stmt->bindParam(':id_produto', $id_produto, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchColumn();
}
}

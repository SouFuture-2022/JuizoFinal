<?php  

namespace App\Infra\Dao\Categorias;

use App\Infra\Database\Conexao;

class CadastrarCategoriaDb{

public function insert(){
    $db = new Conexao();
    $sqlCategoria  = "INSERT INTO categorias (nome_categoria, criado_em) VALUES (:nome_categoria, NOW())";
    $stmt = $db->getConnection()->prepare($sqlCategoria);
    $stmt->bindParam(':nome_categoria', $this->nome_categoria);
    return $stmt->execute();
}
}
<?php  

namespace Infra\Dao\Categorias;

use Infra\Database\Conexao;

class CadastrarCategoria{

public function CadastrarCategoria(){
    $sqlCategoria  = "INSERT INTO categorias (nome_categoria, criado_em) VALUES (:nome_categoria, NOW())";
    $stmt = Conexao::prepare($sqlCategoria);
    $stmt->bindParam(':nome_categoria', $this->nome_categoria);
    return $stmt->execute();
    }

}
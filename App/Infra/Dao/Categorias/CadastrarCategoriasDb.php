<?php  

namespace App\Infra\Dao\Categorias;

use App\Infra\Database\Conexao;

class CadastrarCategoriaDb{

public function insert(){
    $db = new Conexao();
<<<<<<< HEAD
    $sqlCategoria  = "INSERT INTO categorias (nome_categoria, data_registro) VALUES (:nome_categoria, NOW())";
=======
    $sqlCategoria  = "INSERT INTO categorias (nome_categoria, criado_em) VALUES (:nome_categoria, NOW())";
>>>>>>> 4c995b128880beea0566d0a1dfd646bf5566118e
    $stmt = $db->getConnection()->prepare($sqlCategoria);
    $stmt->bindParam(':nome_categoria', $this->nome_categoria);
    return $stmt->execute();
}
}
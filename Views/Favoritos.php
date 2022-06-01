<?php

use App\Infra\Dao\Favoritos\ListarFavoritosDb;
use App\Infra\Dao\Produto\ListarProdutoDb;

$id_usuario = $_GET['a'];
if (isset($_GET['a'])){
    $favoritos = new ListarFavoritosDb;
    echo "Tabela de Favoritos <br>";
    $dados = $favoritos->Find($id_usuario);
    foreach ($dados as $key => $valor){
        $b = $dados[$key];
            foreach ($b as $key => $valor){
                $id_produto = $valor;
                $produto = new ListarProdutoDb;
                $prod = $produto->find($id_produto);
                var_dump($prod);
                
}
    } 

    } else {
        echo "<script> alert('Entre na sua conta para ver a tabela de favoritos') ; window.location='http://Localhost:8000/'</script>";
    }?>
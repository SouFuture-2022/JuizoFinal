<?php

use App\Infra\Dao\Favoritos\ListarFavoritosDb;
$favoritos = new ListarFavoritosDb;
$favoritos->Find($id_favorito);

if (isset($_GET[$value])){
    echo "Tabela de Favoritos <br>";
    if(empty($favoritos)){
        echo "Teste";

    } else {
        var_dump($favoritos);
    }

}
else {
    echo "<script> alert('Entre na sua conta para ver a tabela de favoritos') ; window.location='http://Localhost:8000/'</script>";
}

<?php

namespace App\Core\Controllers;

use App\Core\Store;

class CadastrarProduto {
    public function cadastrarproduto($params){
        Store::layout([
            //'includes/Cabecalhos/menucliente',
            'CadastrarProduto',
            //'includes/Rodapes/rodape'
        ]);
    }
}
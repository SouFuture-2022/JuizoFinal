<?php

namespace App\Core\Controllers;

use App\Core\Store;

class CadastrarImagem {
    public function cadastrarimagem($params){
        Store::layout([
            //'includes/Cabecalhos/menucliente',
            'CadastrarImagem',
            //'includes/Rodapes/rodape'
        ]);
    }
}
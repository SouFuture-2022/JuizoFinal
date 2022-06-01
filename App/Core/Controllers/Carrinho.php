<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Carrinho{
    public function carrinho(){
        Store::Layout([
            'includes/Cabecalhos/menu',
            'Carrinho',
            '/includes/Rodapes/rodape'
        ]);
    }
}
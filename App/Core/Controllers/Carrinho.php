<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Carrinho{
    public function carrinho(){
        Store::Layout([
            'Carrinho'
        ]);
    }
}
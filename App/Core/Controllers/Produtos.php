<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Produtos{
    public function produtos(){
        Store::Layout([
            'Produtos',
            'includes/Rodapes/rodape',
        ]);
    }
}
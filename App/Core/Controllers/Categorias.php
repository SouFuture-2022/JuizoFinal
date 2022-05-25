<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Categorias{
    public function categorias(){
        Store::Layout([
            'includes/Cabecalhos/menu',
            'Categorias',
            'includes/Rodapes/rodape',
        ]);
    }
}
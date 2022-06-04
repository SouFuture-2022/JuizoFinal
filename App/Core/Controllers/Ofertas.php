<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Ofertas {
    public function ofertas($params){
        Store::layout([
            'includes/Cabecalhos/menu',
            'Ofertas',
            'includes/Rodapes/rodape'
        ]);
    }
}
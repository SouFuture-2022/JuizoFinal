<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Favoritos {
    public function favoritos($params){
        Store::layout([
            'includes/Cabecalhos/menucliente',
            'Favoritos',
            'includes/Rodapes/rodape'
        ]);
    }
}

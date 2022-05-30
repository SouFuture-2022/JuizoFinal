<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Favoritos {
    public function favoritos($params){
        Store::layout([
            'includes/Cabecalhos/menu',
            'Favoritos',
            'includes/Rodapes/rodape'
        ]);
    }
}

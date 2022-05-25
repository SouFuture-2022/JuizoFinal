<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Home {
    public function index($params){
        Store::layout([
            'includes/Cabecalhos/menu',
            'Index',
            'includes/Rodapes/rodape'
        ]);
    }
}
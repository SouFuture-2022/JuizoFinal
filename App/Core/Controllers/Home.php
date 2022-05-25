<?php

namespace App\Core\Controllers;
<<<<<<< HEAD
//use App\Core\Class\Store;
=======

use App\Core\Store;
>>>>>>> f241c7cddf35cad4776990ee970f1ecdd5acfb85

class Home {
    public function index($params){
        Store::layout([
            'includes/Cabecalhos/menu',
            'Index',
            'includes/Rodapes/rodape'
        ]);
    }
}
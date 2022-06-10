<?php

namespace App\Core\Controllers;

use App\Core\Store;



class Home {
    public function index($params){
        Store::layout([
            'Index',
            'includes/Rodapes/rodape'
        ]);
    }
}

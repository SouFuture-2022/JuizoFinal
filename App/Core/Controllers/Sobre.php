<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Sobre{
    public function sobre(){
        Store::Layout([
            'Sobre'
        ]);
    }
}
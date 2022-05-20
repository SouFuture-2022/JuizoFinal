<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Contato{
    public function contato(){
        Store::Layout([
            'Contato'
        ]);
    }
}
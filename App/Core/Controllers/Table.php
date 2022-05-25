<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Table{
    public function table(){
        Store::Layout([
            'includes/Cabecalhos/menu',
            'Table',
            'includes/Rodapes/rodape',
        ]);
    }
}
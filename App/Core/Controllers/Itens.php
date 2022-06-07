<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Itens{
    public function itens(){
        Store::Layout([
            'includes/Cabecalhos/menu',
            'Itens',
            'includes/Rodapes/rodape',
        ]);
    }
}
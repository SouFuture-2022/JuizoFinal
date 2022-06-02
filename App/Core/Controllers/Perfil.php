<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Perfil{
    public function perfil(){
        Store::Layout([
            'includes/Cabecalhos/menu',
            'Perfil',
            'includes/Rodapes/rodape',
        ]);
    }
}
<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Perfil{
    public function perfil(){
        Store::Layout([
           // 'includes/Cabecalhos/menucliente',
            'Perfil',
            'includes/Rodapes/rodape',
        ]);
    }
}
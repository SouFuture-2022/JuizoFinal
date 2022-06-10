<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  AllCategorias{
    public function allcategorias(){
        Store::Layout([
            'AllCategorias',
            'includes/Rodapes/rodape',
        ]);
    }
}
<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Home{

    public function index($params)
    {
            Store::Layout([
                '/Includes/Cabecalhos/menu',
                'Index',
                '/Includes/Rodapes/rodape'
            ])
        ];
    }
}

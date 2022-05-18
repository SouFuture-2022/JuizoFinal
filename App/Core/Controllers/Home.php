<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Home
{

    public function index($params)
    {
        return [
            'view' => 'home.php',
            Store::Layout([
                '/Includes/Cabecalhos/menu',
                'Index',
                '/Includes/Rodapes/rodape'

            ])
        ];

        /* return [
            'header' => 'menu.php',
            'view' => 'Index.php',
            'footer' => 'rodape.php',
            'data' => ['name' => 'daniel']
        ];*/
    }
}
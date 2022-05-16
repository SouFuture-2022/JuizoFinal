<?php

namespace App\Core\Controllers;
//use App\Core\Class\Store;

class Home
{
    public function index($params)
    {
        return [
            'header' => 'menu.php',
            'body' => 'Index.php',
            'footer' => 'rodape.php',
            'data' => ['name' => 'daniel']
        ];
    }
}
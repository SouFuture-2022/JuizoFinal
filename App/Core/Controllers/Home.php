<?php

namespace App\Core\Controllers;
//use App\Core\Class\Store;

class Home
{
    public function index($params)
    {
        return [
            'view' => 'Index.php',
            'data' => ['name' => 'daniel']
        ];
    }
}
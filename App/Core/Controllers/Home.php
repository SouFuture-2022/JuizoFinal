<?php

namespace App\Core\Controllers;
//use App\Core\Class\Store;

class Home {
    public function index($params){
        return [
            'view' => 'home.php',
            'data' => ['name' => 'daniel']
        ];
    }
}
<?php

namespace App\Core\Controllers;

class Home {
    public function index($params){
        return [
            
            'view' => 'Index.php',
            'data' => ['name' => 'daniel']
        ];
    }
}
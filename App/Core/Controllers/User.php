<?php

namespace App\Core\Controllers;

class User {
    public function show($params){
        echo 'Estou no User Show';
    }

    public function create($params){
        return [
            'view' => 'user.php',
            'data' => ['int' => '1']
        ];
    }
}
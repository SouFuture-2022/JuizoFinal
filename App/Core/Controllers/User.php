<?php

namespace App\Core\Controllers;

class User {
    public function show($params){
        return [
            'view' => 'userShow.php',
            'data' => ['name' => 'userShow']
        ];
    }

    public function create($params){
        return [
            'view' => 'user.php',
            'data' => ['int' => '1']
        ];
    }
}
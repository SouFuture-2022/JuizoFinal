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

    public function login($params){
        return [
            'header' => 'menu.php',
            'body' => 'Index.php',
            'footer' => 'rodape.php',
            'data' => ['name' => 'daniel']
        ];
        #require '/home/daniel/juizo_final/JuizoFinal/Views/Login.php';
     }
}
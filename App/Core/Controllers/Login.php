<?php

namespace App\Core\Controllers;

use App\Core\Store;

class Login {
    public function login(){
        Store::Layout([
            //'includes/Cabecalhos/menu',
            'Login',
            'includes/Rodapes/rodape'
        ]);
    }
}
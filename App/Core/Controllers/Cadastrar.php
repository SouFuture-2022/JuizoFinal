<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Cadastrar{
    public function cadastrar(){
        Store::Layout([
            'CadastrarUsuario'
        ]);
    }
}
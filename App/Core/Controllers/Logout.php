<?php

namespace App\Core\Controllers;

use App\Core\Store;

class  Logout{
    public function logout(){
        Store::Layout([
            'Logout'
        ]);
    }
}
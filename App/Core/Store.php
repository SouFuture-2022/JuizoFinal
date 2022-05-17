<?php

namespace App\Core;

use Exception;

class Store
{
    // ===========================================================
    public static function Layout($estruturas)
    {

        // verifica se estruturas é um array
        if (!is_array($estruturas)) {
            throw new Exception("Coleção de estruturas inválida");
        }
        // apresentar as views da aplicação
        foreach ($estruturas as $estrutura) {
            require __DIR__ . ("/../../Views/$estrutura.php");
        }
    }

}
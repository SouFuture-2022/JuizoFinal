<?php

namespace App\Controllers;

class MainController {

    public function index(){
        echo 'Estou aqui';
    }

}










/*

     function loadController($matchUri){
        [$controller, $method] = explode('@', array_values($matchUri)[0]);

        $path = "App\\Core\\Controllers\\$controller.php";

        var_dump($path);
        
        if(class_exists("App\\Core\\Controllers\\$controller.php")){
            var_dump('existe');
            die();
        }else {
            var_dump('não existe');
            die();
        }
        
        
    }

    */

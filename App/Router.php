<?php

function rotas(){
    return [
        '/' => 'Home@index'
    ];
}

#função de extração e quebra das url, preparação par ao redirecionamento de arrays.

function rota(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = rotas();

    if(array_key_exists($uri, $routes)){
        #header('location: index.php');
        echo 'deu bom' . $uri;
    }
}


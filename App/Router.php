<?php

function rotas(){
    return require '/home/daniel/juizo_final/JuizoFinal/Rotas.php';
}

function matchUri($uri, $routes){
    if(array_key_exists($uri, $routes)){
       return [$uri => $routes[$uri]];
    }
    return [];
}

function repairQueryString($uri, $routes){
    return array_filter(
        $routes, 
        function($value) use ($uri){ 
            $regex = str_replace('/', '\/', ltrim($value, '/'));
            return preg_match("/^$regex$/", ltrim($uri, '/'));
        },
        ARRAY_FILTER_USE_KEY
    );
}

function rota(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = rotas();

    $arr1 = [
        'user', '1', 'name', 'daniel'
    ];

    $arr2 = [
        'user', '[0-9]'
    ];

    $matchUri = matchUri($uri, $routes);

    if(empty($matchUri)){
        $matchUri = repairQueryString($uri, $routes);
    }
    var_dump($matchUri);
    die();

}


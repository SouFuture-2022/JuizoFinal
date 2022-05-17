<?php

function rotas(){
    return require __DIR__ . '/../Rotas.php';
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

function params($uri, $matchUri){
    if(!empty($matchUri)){
        $matchToGet = array_keys($matchUri)[0];
        return array_diff(
            $uri,
            explode('/', ltrim($matchToGet, '/'))
        );
    }
    return [];
}

function paramsFormat($uri, $params){
    $paramsData = [];
    foreach($params as $index => $param){
        $paramsData[$uri[$index - 1]] = $param;
    }
    return $paramsData;
}

function rota(){
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $routes = rotas();

    $matchUri = matchUri($uri, $routes);

    $params = [];
    
    if(empty($matchUri)){
        $matchUri = repairQueryString($uri, $routes);
        $uri = explode('/', ltrim($uri, '/'));
        $params = params($uri, $matchUri);
        $params = paramsFormat($uri, $params);
    }

    if(!empty($matchUri)){
        return loadController($matchUri, $params);

    }

    throw new Exception("Algo deu errado", 1);

}


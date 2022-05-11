<?php 

const CONTROLLER_PATH = "App\\Core\\Controllers\\";

function loadController($matchUri, $params){

    [$controller, $method] = explode('@', array_values($matchUri)[0]);
    $controllerPath = CONTROLLER_PATH . $controller;

    if(!class_exists($controllerPath)){
        throw new Exception("Controller {$controller} não existe", 1);
    }

    $controllerInstance = new $controllerPath;

    if(!method_exists($controllerInstance, $method)){
        throw new Exception("O método {$method} não existe no controlador {$controller}", 1);
    }

    #return
    return $controllerInstance->$method($params);

}



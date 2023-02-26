<?php

function load(string $controller, string $action) {

    try {
        $controllerNamespace = "app\\controllers\\{$controller}";
        
        if(!class_exists($controllerNamespace)) {
            throw new Exception("O controller {$controller} não existe");
        }
    
        $controllerInstace = new $controllerNamespace();
    
        if(!method_exists($controllerInstace, $action)) {
            throw new Exception("O método {$action} não existe no controller {$controller}");
        }
    
        $controllerInstace->$action($_REQUEST);
    
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$routes = [
    'GET' => [
        '/' => fn() => load('HomeController', 'index'),
        '/contact' => fn() => load('ContactController', 'index')
    ],
    'POST' => [
        '/contact' => fn() => load('ContactController', 'store')
    ]
];
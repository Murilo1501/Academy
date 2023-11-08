<?php

//Controllers
require_once __DIR__.'/Controller/controller.php';
require_once __DIR__.'/Controller/UserController.php';
require_once __DIR__.'/Controller/loginController.php';
require_once __DIR__.'/Controller/treatingController.php';


//Models
require_once __DIR__.'/Model/UserModel.php';
require_once __DIR__.'/Model/LoginModel.php';

//database
require_once __DIR__.'/config/database/connect.php';

$routes = require_once 'routes/routes.php';


function routeRequest($routes) {
    $pathInfo = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];
    $key = "$method|$pathInfo";
    if (array_key_exists($key, $routes)) {
        list($controllerClass, $action) = $routes[$key];

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass();
            $controller->$action();
        } else {
            http_response_code(404);
        }
    } else {
        http_response_code(404);
    }
}

routeRequest($routes);
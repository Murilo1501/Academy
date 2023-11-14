<?php

namespace App\Route;


class Route{

    private static $routes = [];

    public static function get($uri,$callback){
        Self::$routes['GET'][$uri] = $callback;
    }

    public static function post($uri,$callback){
        Self::$routes['POST'][$uri] = $callback;
    }

    public static function redirect($requestURI,$requestMethod){
        if(array_key_exists($requestMethod,Self::$routes) && array_key_exists($requestURI, self::$routes[$requestMethod])){
            return self::$routes[$requestMethod][$requestURI]();
        } else {
            return '404 Not Found';
        }
    }
}



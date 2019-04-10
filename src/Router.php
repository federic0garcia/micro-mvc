<?php

class Router
{
    public static function route()
    {
        $route = $_SERVER['REQUEST_URI'];

        $response = null;

        if (isset(Config::$router[$route])) {
            $routeMap = Config::$router[$route];

            $controller = $routeMap['controller'];
            $method = $routeMap['method'];

            $controllerInstance = new $controller();
            $response = $controllerInstance->$method();
        }

        return $response;
    }
}

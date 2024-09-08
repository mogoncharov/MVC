<?php

namespace app\core;

define('CONTROLLER_NAMESPACE', 'app\\controllers\\');
use App\controllers;

class Route
{
    public static function start()
    {
        $controllerClassname = 'Home' . 'Controller';
        $actionName = 'index';
        $payload = [];

        $routes = explode('/', $_SERVER['REQUEST_URI']);
        if (!empty($routes[1])) {
            $controllerClassname = ucfirst(strtolower($routes[1])) . 'Controller';
        }
        if (!empty($routes[2])) {
            $actionName = strtolower($routes[2]);
        }
        if (!empty($routes[3])) {
            $payload = array_slice($routes, 3);
        }
        $controllerName = CONTROLLER_NAMESPACE . $controllerClassname;

        $controllerFile = $controllerClassname . '.php';

        $controllerPath = CONTROLLERS . $controllerFile;

        if (file_exists($controllerPath)) {
            include_once $controllerPath;
        } else {
            Route::Error();
        }

        $controller = new $controllerName();

        if (method_exists($controller, $actionName)) {
            $controller->$actionName($payload);
        } else {
            Route::Error();
        }
    }
    public static function Error()
    {
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('location:/error');
    }
}
?>
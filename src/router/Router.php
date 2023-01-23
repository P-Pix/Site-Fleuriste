<?php

class Router {
    private array $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function addRoute(string $path, string $controller, string $method) {
        $this->routes[$path] = [
            'controller' => $controller,
            'method' => $method
        ];
    }

    public function start() {
        $path = $_SERVER['REQUEST_URI'];
        $route = $this->routes[$path];

        $controller = $route['controller'];
        $method = $route['method'];

        $controller = new $controller();
        $controller->$method();
    }
};

?>
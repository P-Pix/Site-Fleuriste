<?php

require_once "src/controller/Controller.php";

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

        if (array_key_exists($path, $this->routes)) {
            $controller = $this->routes[$path]['controller'];
            $method = $this->routes[$path]['method'];

            $controller->$method();
        } else {
            echo '404';
        }
    }
};

?>
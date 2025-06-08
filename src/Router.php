<?php
namespace Docly;

class Router {
    private array $routes = [];

    public function get(string $path, string $handler) {
        $this->routes['GET'][$path] = $handler;
    }

    public function post(string $path, string $handler) {
        $this->routes['POST'][$path] = $handler;
    }

    public function dispatch() {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = strtok($_SERVER['REQUEST_URI'], '?');
        $scriptName = dirname($_SERVER['SCRIPT_NAME']);
    
        if (str_starts_with($uri, $scriptName)) {
            $uri = substr($uri, strlen($scriptName));
        }
        $uri = '/' . trim($uri, '/');
    
        $handler = $this->routes[$method][$uri] ?? null;
    
        if ($handler) {
            [$class, $method] = explode('@', $handler);
            $class = "\\Docly\\$class";
            (new $class())->$method();
        } else {
            http_response_code(404);
            echo "404 Not Found";
        }
    }
    
}

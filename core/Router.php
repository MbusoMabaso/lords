<?php

namespace Core;

class Router {
    protected $routes = [];

    public function add($route, $params = []) {
        $route = preg_replace('/\//', '\/', $route);
        $route = preg_replace('/\{([a-z]+)\}/', '(?P<\1>[a-z0-9-]+)', $route);
        $route = '/^' . $route . '$/i';
        $this->routes[$route] = $params;
    }

    public function dispatch($url) {
        $url = $this->removeQueryStringVariables($url);

        // Strip leading slash for easier routing
        $url = ltrim($url, '/');

        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        $params[$key] = $match;
                    }
                }
                $controller = $params['controller'];
                $controller = $this->convertToStudlyCaps($controller);
                $controller = "App\Controllers\\$controller";

                if (class_exists($controller)) {
                    $controller_object = new $controller($params);
                    $action = $params['action'];
                    $action = $this->convertToCamelCase($action);

                    if (is_callable([$controller_object, $action])) {
                        $controller_object->$action();
                        return; // Successfully dispatched
                    } else {
                        throw new \Exception("Method $action in controller $controller not found");
                    }
                } else {
                    throw new \Exception("Controller class $controller not found");
                }
            }
        }

        throw new \Exception("Page not found", 404);
    }

    protected function convertToStudlyCaps($string) {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }

    protected function convertToCamelCase($string) {
        return lcfirst($this->convertToStudlyCaps($string));
    }

    protected function removeQueryStringVariables($url) {
        if ($url != '') {
            $parts = explode('&', $url, 2);
            if (strpos($parts[0], '=') === false) {
                $url = $parts[0];
            } else {
                $url = '';
            }
        }
        return $url;
    }
}

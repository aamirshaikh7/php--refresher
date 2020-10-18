<?php

class Router {
    protected $routes = [];

    public function initialize($routes) {
        $this->routes = $routes;
    }

    public function call($uri) {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No route found');
    }
}
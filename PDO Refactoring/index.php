<?php

$builder = require 'main/bootstrap.php';

$router = new Router();

require 'routes.php';

var_dump($_SERVER['REQUEST_URI']);

require $router->call('contact');
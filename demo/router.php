<?php

$routes = require 'routes.php';

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort(Response::NOT_FOUND);
    }
}

function abort($code = Response::NOT_FOUND)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

$uri = rtrim(parse_url($_SERVER['REQUEST_URI'])['path'], "/");

routeToController($uri, $routes);

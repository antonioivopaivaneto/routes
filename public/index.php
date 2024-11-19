<?php

require '../vendor/autoload.php';

$routes = require '../routes/web.php';
$path = $_SERVER['PATH_INFO'] ?? "/";

if(array_key_exists($path, $routes)){
    [$controller,$method] = $routes[$path];
    (new $controller)->$method();

}else{
    http_response_code(404);
    echo "404 Not Found";
}
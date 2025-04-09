<?php

include_once "vendor/autoload.php";
include_once "env.php";

use App\Controladores\UserController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
$router = new RouteCollector();

$router->get('/', function (){
    include_once DIRECTORIO_VISTAS . "errores.php";
});

$router->get('/user', [UserController::class, 'index']);
$router->get('/user/{id}', [UserController::class, 'show']);
$router->get('/user/{id}/edit', [UserController::class, 'edit']);
$router->post('/user', [UserController::class, 'store']);
$router->put('/user/{id}', [UserController::class, 'update']);
$router->patch('/user/{id}', [UserController::class, 'update']);
$router->delete('/user/{id}', [UserController::class, 'destroy']);



$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

try {
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    echo $response;
}catch (HttpRouteNotFoundException $exception){
    include DIRECTORIO_VISTAS . "404.php";
}

// Print out the value returned from the dispatched function







echo "";
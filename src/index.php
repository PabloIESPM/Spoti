<?php

include_once "vendor/autoload.php";

use App\Controladores\UserController;
use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();

$router->get('/', function (){
    return "Hello World!";
});

$router->get('/user', [UserController::class, 'index']);
$router->get('/user/{id}/edit', [UserController::class, 'show']);
$router->get('/user/{id}/edit', [UserController::class, 'edit']);
$router->post('/user', [UserController::class, 'store']);
$router->put('/user/{id}', [UserController::class, 'update']);
$router->patch('/user/{id}', [UserController::class, 'update']);
$router->delete('/user/{id}', [UserController::class, 'destroy']);



$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Print out the value returned from the dispatched function
echo $response;






echo "";
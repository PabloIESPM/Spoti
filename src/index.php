<?php

include_once "vendor/autoload.php";
include_once "env.php";

use App\Controladores\UserController;
use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Exception\HttpRouteNotFoundException;
$router = new RouteCollector();

// MENU NAVEGACIÓN

$router->get('/inicio', function() {
    include_once DIRECTORIO_VISTAS . 'inicio.php';
});
$router->get('/videojuegos', function() {
    include_once DIRECTORIO_VISTAS . 'videojuegos.php';
});
$router->get('/calendario', function() {
    include_once DIRECTORIO_VISTAS . 'calendario.php';
});
$router->get('/inicioSesion', function () {
    include_once DIRECTORIO_VISTAS . 'inicioSesion.php';
});
$router->get('/registro', function () {
    include_once DIRECTORIO_VISTAS . 'registro.php';
});
$router->get('/recuperacion', function () {
    include_once DIRECTORIO_VISTAS . 'recuperacion.php';
});

// FOOTER
$router->get('/contacto', function() {
    include_once DIRECTORIO_VISTAS . 'contacto.php';
});

// Sobre GameShelf
$router->get('/acercaDe', function() {
    include_once DIRECTORIO_VISTAS . 'acercaDe.php';
});
$router->get('/prensa', function() {
    include_once DIRECTORIO_VISTAS . 'prensa.php';
});
$router->get('/informes', function() {
    include_once DIRECTORIO_VISTAS . 'informes.php';
});

// Política de privacidad
$router->get('/privacidad', function() {
    include_once DIRECTORIO_VISTAS . 'politicaPrivacidad.php';
});
$router->get('/terminosServicio', function() {
    include_once DIRECTORIO_VISTAS . 'terminosServicio.php';
});
$router->get('/seguridad', function() {
    include_once DIRECTORIO_VISTAS . 'seguridad.php';
});
$router->get('/cookies', function() {
    include_once DIRECTORIO_VISTAS . 'politicaCookies.php';
});


// Ayuda
$router->get('/preguntas', function() {
    include_once DIRECTORIO_VISTAS . 'preguntasFrecuentes.php';
});
$router->get('/guiaUsuario', function() {
    include_once DIRECTORIO_VISTAS . 'guiaUsuario.php';
});



// OTROS

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
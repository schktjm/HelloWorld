<?php

require_once '../vendor/autoload.php';

use League\Route\RouteGroup;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

// DI Container
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER, $_GET, $COOKIE, $_FILES
);

// router 本体
$router = new League\Route\Router;

// routing
$router->get('/', function (ServerRequestInterface $request, array $args){
    $response = new Zend\Diactoros\Response;
    $response->getBody()->write('hello');
    return $response;
});

$router->get('/index', Controllers\IndexAction::class);

$response = $router->dispatch($request);
(new Zend\HttpHandlerRunner\Emitter\SapiEmitter)->emit($response);


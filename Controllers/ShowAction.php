<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ShowAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();

        $view = new \Views\ShowOembed;

        $response->getBody()->write($view());
        return $response;
    }    
}

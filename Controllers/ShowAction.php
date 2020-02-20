<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ShowAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();

        $view = new \Views\ShowOembed;

        $response->getBody()->write($view('https://www.youtube.com/watch?v=gc0_Acq8dV4'));
        return $response;
    }    
}

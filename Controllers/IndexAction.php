<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();
        $response->getBody()->write('<h1>Hello</h1>');
        return $response;
    }
}

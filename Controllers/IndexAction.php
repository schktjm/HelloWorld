<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class IndexAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();
        $message = 'hello';
        if(!is_null($args['hello'])) {
            $message = (string)$args['hello'];
        }

        $view = new \Views\Hello;
        $content = $view->getHello("world");

        $response->getBody()->write($content);
        return $response;
    }
}

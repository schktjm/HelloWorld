<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ResultAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();

        $result = new \Views\Result;

        $text = htmlspecialchars($_POST['input']);

        $response->getBody()->write($result($text));
        return $response;
    }
}

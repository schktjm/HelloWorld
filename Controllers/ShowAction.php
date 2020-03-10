<?php
namespace Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class ShowAction {
    public function __invoke(ServerRequestInterface $req, array $args) {
        $response = new \Zend\Diactoros\Response();

        $model = new \Models\VideoModel;
        $view = new \Views\ShowContent;

        $url = 'http://www.youtube.com/watch?v=gc0_Acq8dV4';
        $response->getBody()->write($view($model($url)));
        return $response;
    }    
}

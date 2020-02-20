<?php
namespace Views;

class ShowOembed {
    public function __invoke(string $url){
        \ob_start();
        echo $url;
        return (string) ob_get_clean();
    }
}

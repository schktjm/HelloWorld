<?php
namespace Views;


class ShowContent {
    public function __invoke(string $content){
        ob_start();
        echo $content;
        return (string)ob_get_clean();
    }
}

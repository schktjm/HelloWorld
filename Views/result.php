<?php

namespace Views;

class Result {
    public function __invoke(string $text) {
        \ob_start();
        echo $text;
        return (string)\ob_get_clean();
    }
}

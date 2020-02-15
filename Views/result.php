<?php

namespace Views;

class Result {
    public function __invoke(string $text) {
        ob_start();
        echo \htmlspecialchars($_POST['text']);

        $message = (string)\ob_get_clean();
        return $message;
    }
}

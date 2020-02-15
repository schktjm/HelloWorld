<?php

namespace Views;

class Hello {
    public function __invoke(string $arg) {
        ob_start(); ?>
<h1>hello</h1>
    <h1><?= $arg ?></h1>
<?
        $content = (string)ob_get_clean();
        return $content;
    }
}


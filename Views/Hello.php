<?php

namespace Views;

class Hello {
    public function getHello(string $arg) {
        ob_start(); ?>
<h1>hello</h1>
<h2><?= $arg ?></h2>
<?
        $content = (string)ob_get_clean();
        return $content;
    }
}


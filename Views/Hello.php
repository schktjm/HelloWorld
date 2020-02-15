<?php

namespace Views;

class HelloPage {
    public function getHello() {
        ob_start(); ?>
        <h1>hello</h1>
        <?
        $content = (string)ob_get_clean();
        return $content;
    }
}


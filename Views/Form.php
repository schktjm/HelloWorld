<?php

namespace Views;

class Form {
    public function showForm() {

        ob_start(); ?>
<form action="result.php" method="post">
<input type="text" name="input" value="" size="30" />
<input type="submit" value="submit" >
</form>
<?
        $content = (string)ob_get_clean();
        return $content;
    }
}

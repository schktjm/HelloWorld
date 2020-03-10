<?php
namespace Views;

use Model\VideoModel;

class ShowContent {
    public function __invoke(VideoModel $content){
        ob_start();
        echo $content->html;
        return (string)ob_get_clean();
    }
}

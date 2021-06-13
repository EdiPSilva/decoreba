<?php 

class Aside {
    public function __construct() {
    }

    public function show() {
        require_once(REQUIRESVIEWS . 'templates/Aside.php');
    }
}
?>
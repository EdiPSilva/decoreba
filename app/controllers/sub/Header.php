<?php 


class Header {
    public function __construct() {
    }

    public function show() {
        require_once(REQUIRESVIEWS . 'templates/Header.php');
    }
}
?>
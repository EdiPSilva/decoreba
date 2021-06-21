<?php 

class Nav {
    private $screen;

    public function __construct() {
    }

    public function setScreen($value) {
        $this->screen = $value;
    }

    public function getScreen() {
        return $this->screen != null ? $this->screen : "";
    }

    public function show() {
        require_once(REQUIRESVIEWS . 'templates/Nav.php');
    }
}
?>
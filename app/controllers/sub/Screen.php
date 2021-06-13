<?php
class Screen {
    private $contents;
    private $screen;

    public function __construct($screen) {
        $this->screen = $screen;
    }

    public function setContents($contents) {
        $this->contents = $contents;
    }

    public function getContents() {
        return $this->contents;
    }

    public function show() {
        require_once(REQUIRESVIEWS . "screens/{$this->screen}.php");
    }
}
?>
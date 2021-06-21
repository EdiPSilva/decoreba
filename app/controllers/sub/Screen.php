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
        if (file_exists(REQUIRESVIEWS . "screens/{$this->screen}.php")) {
            require_once(REQUIRESVIEWS . "screens/{$this->screen}.php");
        } else {
            require_once(REQUIRESVIEWS . "screens/404.php");
        }
    }
}
?>
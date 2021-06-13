<?php 

class Head {
    private $title;

    public function __construct() {
        
    }

    public function setTitle($title = null) {
        $this->title = "";
        if ($title != null) {
            $this->title = $title;
        }
    }

    public function getTile() {
        return $this->title;
    }

    public function show() {
        require_once(REQUIRESVIEWS . 'templates/Head.php');
    }
}
?>
<?php 

class Footer {

    private $screen;
    private $description;

    public function __construct($value = null) {
        $this->setDescription($value);
    }

    public function setDescription($value) {
        $this->description = "Todos os direitos reservados.";
        if ($value != null) {
            $this->description = $value;
        }
    }

    public function getDescription() {
        return $this->description;
    }

    public function setScreen($value) {
        $this->screen = $value;
    }

    public function getScreen() {
        return $this->screen;
    }

    public function show() {
        require_once(REQUIRESVIEWS . 'templates/Footer.php');
    }
}
?>
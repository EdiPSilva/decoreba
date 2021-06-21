<?php
require_once('Head.php');
require_once('Header.php');
require_once('Nav.php');
require_once('Aside.php');
require_once('Footer.php');
require_once('Screen.php');

class Layout {

    private $screen;
    private $head;
    private $header;
    private $nav;
    private $aside;
    private $footer;   

    public function __construct($screen = null) {
        $this->head = new Head();
        $this->header = new Header();
        $this->nav = new Nav();
        $this->aside = new Aside();
        $this->footer = new Footer();

        if ($screen != null) {
            $this->screen = new Screen($screen);
            $this->nav->setScreen($screen);
        }
    }

    public function setTitle($value = null) {
        $this->head->setTitle($value);
    }

    public function setContents($value) {
        if ($this->screen != null) {
            $this->screen->setContents($value);
        }
    }

    public function show() {
        $this->head->show();
        $this->header->show();
        $this->nav->show();
        if ($this->screen != null) {
            $this->screen->show();
        }
        $this->aside->show();
        $this->footer->show();
    }
}
?>
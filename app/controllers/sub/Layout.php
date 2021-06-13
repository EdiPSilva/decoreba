<?php
require_once('Head.php');
require_once('Header.php');
require_once('Nav.php');
require_once('Aside.php');
require_once('Footer.php');

class Layout {

    private $contents;
    private $screen;

    private $head;
    private $header;
    private $nav;
    private $aside;
    private $footer;   

    public function __construct() {
        
        $this->head = new Head();
        $this->header = new Header();
        $this->nav = new Nav();
        $this->aside = new Aside();
        $this->footer = new Footer();

        //require_once(REQUIRESVIEWS.'templates/Template.php');
        //require_once(REQUIRESVIEWS.'templates/Head.php');
        //$this->header = new Header();
        //require_once(REQUIRESVIEWS.'templates/Header.php');
    }
}
?>
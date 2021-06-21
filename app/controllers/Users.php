<?php
require_once(REQUIRESUTILS.'Routes.php');

class Users extends Routes {

    private $screen = 'Users';
    private $layout;

    public function __construct() {
        parent::__construct(); //Chama o construto da classe em extends

        $this->layout = new Layout($this->screen);
        $this->layout->setTitle($this->screen);
        $this->layout->setContents($this->screen);
        $this->layout->show();
    }

    private function findByPage($currentPage, $limitPage)
    {
    }

    private function findById($id)
    {
    }

    private function findByFilter($filter)
    {
    }

    private function insertOrUpdate()
    {
    }

    private function delete($id)
    {
    }

    private function getTemplate()
    {
    }
}
?>
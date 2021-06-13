<?php
require_once(REQUIRESUTILS . 'Routes.php');
require_once(REQUIRESCONTROLLERS . 'sub/Layout.php');

class Home extends Routes
{
    private $screen = 'Home';
    private $layout;
    
    public function __construct()
    {
        parent::__construct(); //Chama o construto da classe em extends
        //echo $this->getControllerByRote();
        $this->layout = new Layout($this->screen);
        $this->layout->setTitle($this->screen);
        $this->layout->setContents("Funcionei");
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
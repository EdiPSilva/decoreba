<?php
require_once(REQUIRESUTILS . 'Routes.php');
require_once(REQUIRESCONTROLLERS . 'sub/Layout.php');

class Home extends Routes
{
    public function __construct()
    {
        parent::__construct(); //Chama o construto da classe em extends
        //echo $this->getControllerByRote();
        $layout = new Layout();
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
<?php
require_once(REQUIRESUTILS.'Routes.php');

class Configurations extends Routes
{
    public function __construct()
    {
        parent::__construct();//Chama o construto da classe em extends
        echo $this->getControllerByRote();
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
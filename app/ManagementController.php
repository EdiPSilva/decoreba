<?php
require_once('utils/Routes.php');

//require de todos os arquivos do diretório controllers
$dir = __DIR__ . DIRECTORY_SEPARATOR.'controllers';
$files = glob($dir . DIRECTORY_SEPARATOR . '*.php');
foreach ($files as $file) {
    require_once($file);
}

class ManagementController extends Routes {

    private $methodo;
    private $parameters = [];
    private $object;

    public function __construct() {
        parent::__construct();//Chama o construto da classe em extends
        $this->addController();
    }

    //Método de adição de controller
    private function addController() {
        $controllerRoute = $this->getControllerByRote();
        //$controllerResult = DIRECTORYCONTROLLERS . $controllerRoute ;
        $this->object = new $controllerRoute;
    }

    //Método de adição de método de controller
    private function addMethod() {

    }

    //Método de adição de parâmetros do controller
    private function addParameter() {

    }
}
?>
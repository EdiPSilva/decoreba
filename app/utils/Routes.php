<?php
require_once('UrlParser.php');

class Routes extends UrlParser {
    private $rota;
    private $firstUrl;

    public function __construct() {
        parent::__construct();//Chama o construto da classe em extends
        $url = $this->parserUrl();
        $this->setFirstUrl($url[0]);
        $this->setRota();
    }

    private function setRota() {
        $this->rota = array(
            "" => "Home",
            "home" => "Home",
            "palavras" => "Words",
            "praticar" => "Practice",
            "usuario" => "Users",
            "configuracao" => "Configurations",
        );
    }

    private function setFirstUrl($value) {
        $this->firstUrl = $value;
    }

    public function getControllerByRote() {
        if (array_key_exists($this->firstUrl, $this->rota)) {
            $dir = ROOTDIRECTORYSERVER.ROOTDIRECTORYAPP.DIRECTORYCONTROLLERS;
            $file = $dir . $this->rota[$this->firstUrl] . '.php';
            if (file_exists($file)) {
                return $this->rota[$this->firstUrl];
            } else {
                return "Home";
            }
        } 
        
        return "Home";
    }
}
?>
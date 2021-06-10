<?php
require_once 'UrlParser.php';

class Routes {
    private $rota;
    private $firstUrl;

    public function __construct() {
        $urlParser = new UrlParser();
        $url = $urlParser->parserUrl();
        $this->setFirstUrl($url[0]);
        $this->setRota();
    }

    private function getRota() {
        return $this->rota;
    }

    private function setRota() {
        $this->rota = array(
            "" => "Home",
            "home" => "Home",
            "palavras" => "Words",
        );
    }

    private function getFirstUrl() {
        return $this->firstUrl;
    }

    private function setFirstUrl($value) {
        $this->firstUrl = $value;
    }

    public function getControllerByRote() {
        if (array_key_exists($this->firstUrl, $this->rota)) {
            $dir = ROOTDIRECTORYSERVER.ROOTDIRECTORYAPP.DIRECTORYCONTROLLERS;
            if (file_exists($dir.$this->rota[$this->firstUrl].'.php')) {
                return $this->rota[$this->firstUrl];
            } else {
                return "Home";
            }
        } 
        
        return "Home";
    }
}
?>
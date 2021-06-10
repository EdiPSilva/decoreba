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
            if (file_exists(ROOTDIRECTORYSERVER . '/' . DIRECTORYCONTROLLERS . '/' .$this->rota[$this->firstUrl])) {
                return $this->rota[$this->firstUrl];
            } else {
                return "Home";
            }
        } 
        
        return "Home";
    }
}
?>
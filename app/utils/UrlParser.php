<?php
class UrlParser
{
    public function __construct()
    {        
    }

    //Por base das barras da url será dividido em um array
    public function parserUrl ()
    {
        return explode("/", $this->validateUrl(), FILTER_SANITIZE_URL);
    }

    private function validateUrl()
    {
        $get = $_GET['url'];
        if (substr($get, -1) == "/") {
            $get = substr($get, 0, strlen($get) - 1);
        }
        return trim($get);
    }
}
?>
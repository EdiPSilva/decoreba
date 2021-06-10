<?php
class UrlParser {
    //Por base das barras da url será dividido em um array
    public function parserUrl () {
        return explode("/", rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}
?>
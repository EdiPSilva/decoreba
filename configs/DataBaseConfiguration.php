<?php
require_once 'configs/DetectEnvironment.php';

class DataBaseConfiguration {
    
    public $host;
    public $user;
    public $pass;
    public $data;
    public $drive;

    public function __construct() {

        $this->host = 'localhost';
        $this->user = 'root';
        $this->pass = 'root';
        $this->data = 'decoreba';

        if (DetectEnvironment::isProduction()) {
            $this->host = null;
            $this->user = null;
            $this->pass = null;
            $this->data = null;
        }

        $this->drive = 'mysql:host=' . $this->host . ';dbname=' . $this->data;
    }
}
?>
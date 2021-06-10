<?php
    header("Content-Type: text/html; charset=utf-8");

    require_once('configs/Config.php');
    require_once(ROOTDIRECTORYSERVER. ROOTDIRECTORYAPP. '/ManagementController.php');

    $mg = new ManagementController();
    //echo '<pre>';
    //var_dump($mg);

    /*include 'configs/ConnectionDataBase.php';

    $connection = ConnectionDataBase::newConnection();

    if ($connection != null) {
        $query = $connection->query('select * from words;');
        $result = $query->fetch(PDO::FETCH_ASSOC);

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }*/
    
?>
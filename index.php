<?php
    include 'configs/DataBaseConfiguration.php';

    $dbConfig = new DataBaseConfiguration();
    echo '<pre>';
    print_r($dbConfig);
    echo '</pre>';
?>
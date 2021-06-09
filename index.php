<?php
    include 'configs/ConnectionDataBase.php';

    $connection = ConnectionDataBase::newConnection();

    if ($connection != null) {
        $query = $connection->query('select * from words;');
        $result = $query->fetch(PDO::FETCH_ASSOC);

        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
    
?>
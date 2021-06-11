<?php
require_once('configs/DataBaseConfiguration.php');

class ConnectionDataBase
{
    public static function newConnection()
    {
        $conn = null;
        try {
            $config = new DataBaseConfiguration();
            $conn = new PDO($config->drive, $config->user, $config->pass);
            if ($conn != null) {
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
        } catch (PDOException $e) {
            die('Erro ao conectar - '.$e->getMessage());
        }
        return $conn;
    }

    public static function closeConnection($conn)
    {
        $conn = null;
    }
}
?>
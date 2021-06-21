<?php
    header("Content-Type: text/html; charset=utf-8");
    require_once('configs/Config.php');
    require_once(ROOTDIRECTORYSERVER. ROOTDIRECTORYAPP. '/ManagementController.php');
    require_once("configs/ConnectionDataBase.php");

    $mg = new ManagementController();   

    function importCsv() {

        $con = ConnectionDataBase::newConnection();
        $file = 'docs/words_db_translate.csv';

        if (file_exists($file)) {
            $csv = fopen($file, 'r');
            fgetcsv($csv);

            while (($line = fgetcsv($csv, null, ';')) !== FALSE) {
                $id = $line[0];
                $index = 1;
                for ($i = 2; $i < count($line); $i ++) {
                    if ($line[$i] != null && $line[$i] != "") {
                        $exist = exist($con, $id,  $line[$i]);
                        if (!$exist) {
                            insert($con, $id, $line[$i], $index);
                        }
                        $index++;
                    }
                }
                //die;
            }
        }

        var_dump("Fim");

        ConnectionDataBase::closeConnection($con);
    }

    function exist($con, $id, $value) {
        $query = $con->query("SELECT id FROM translations WHERE id_word = ". $id . " AND translation = '". $value ."'");
        $result = $query->fetch(PDO::FETCH_ASSOC);

        if ($result == null) {
            return false;
        }
        return true;
    }

    function insert($con, $id, $value, $peso) {
        try {
            $insert = "INSERT INTO translations (id_word, translation, weight, dt_add) VALUES (". $id.", '". $value. "', ". $peso.", NOW());";
            $con->query($insert);
        } catch (PDOException $e) {
            die("erro ao inserir a palavra " . $value." - ".$e->getMessage());
        }
    }

    //importCsv();
?>
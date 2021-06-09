<?php
$connection = mysqli_connection("localhost", "root", "root", "decoreba");

if(mysqli_connect_errno()) {
    exit("Erro ao conectar no banco");
}
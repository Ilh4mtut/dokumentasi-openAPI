<?php 

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DB', 'kelompok_12');

    $db_connect = mysqli_connect( HOST, USER,PASS, DB ) or die ('Unable connect');

    header('Content-Type: application/json');

?>
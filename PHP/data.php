<?php
require_once('helper.php');

$query = "SELECT * FROM matkul ORDER BY id DESC";
$sql = mysqli_query($db_connect, $query);

if ($sql) {

    $result = array();
    while ($row = mysqli_fetch_array($sql)) {
        array_push( $result, array(
            'id' => $row['id'],
            'matkul' => $row['matkul'],
        ) );
    }

    echo json_encode ( array('matkul' => $result));
}

?>
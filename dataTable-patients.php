<?php

require("model/DBConn.php");

$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);

if($result){
    $rows = array();
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    echo json_encode($rows);
}
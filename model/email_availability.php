<?php 
require_once "DBController.php";
$db_handle = new DBController();
if(!empty($_POST["email"])) {
    $number =  rand(1,50);
    $email = $_POST["email"];
    $query = "SELECT * FROM permohonan_syarikat WHERE email='" . $_POST["email"] . "'";
    $result = $db_handle->getRecords($query);
        if ($result->num_rows > 0) {
            echo "<span style='padding: 5px 5px;' class='status-not-available'>Not Available <i class='fas fa-times'></i></span>";
    }else{
        echo "<span style='padding: 5px 5px;' class='status-not-available'> Email Available <i class='fas fa-check'</i></span>";

    }
  }
?>
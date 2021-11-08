<?php 
require_once "DBController.php";
$db_handle = new DBController();
if(!empty($_POST["nama_syarikat"])) {
    $number =  rand(1,50);
    $username = $_POST["nama_syarikat"];
    $query = "SELECT * FROM permohonan_syarikat WHERE nama_syarikat='" . $_POST["nama_syarikat"] . "'";
    $result = $db_handle->getRecords($query);
        if ($result->num_rows > 0) {
            echo "<span style='padding: 5px 5px;' class='status-not-available'> <i class='fas fa-times'></i> </span>";
    }else{
        echo "<span style='padding: 5px 5px;' class='status-not-available'> <i class='fas fa-check'</i> </span>";

    }
  }
?>
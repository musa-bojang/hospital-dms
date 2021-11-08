<?php 
require_once "DBController.php";
$db_handle = new DBController();
if(!empty($_POST["username"])) {
    $number =  rand(1,50);
    $username = $_POST["username"];
    $query = "SELECT * FROM patients WHERE identification='" . $_POST["username"] . "'";
    $result = $db_handle->getRecords($query);
        if ($result->num_rows > 0) {
            echo "<span style='background:red; color: white; padding: 5px 5px;' class='status-not-available'>ID Already Exist. try $username$number <i class='fas fa-times'></i></span>";
    }else{
         echo "<span style='background:#90ee90; color: white;padding: 5px 5px;' class='status-not-available'> Username Available <i class='fas fa-check'</i></span>";
       
        // $error = array("error"=>0);
        // echo json_encode($error);
    }
  }
?>
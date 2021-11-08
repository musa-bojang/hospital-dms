<?php 
require_once "DBController.php";
$user = $_SESSION['member_id'];
$db_handle = new DBController();

    $query_file_finder = "SELECT * FROM permohonan_syarikat WHERE id = $user";
    $result_file_finder = $db_handle->getRecords($query_file_finder);
        if ($result_file_finder->num_rows > 0) {
           while($file_row = $result_file_finder->fetch_assoc()){
                $file_1 = $file_row["file_1"];
                $file_2 = $file_row["file_2"];
                $file_3 = $file_row["file_3"];
                $file_4 = $file_row["file_4"];
                $file_5 = $file_row["file_5"];
                $file_6 = $file_row["file_6"];
                $file_7 = $file_row["file_7"];
                $file_8 = $file_row["logo"];
                $file_9 = $file_row["tempat"];
                $file_10 = $file_row["penginapan"];
                $file_11 = $file_row["pengangkutan"];
           }
    }
    
?>
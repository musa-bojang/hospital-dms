<?php
session_start();
require "DBController.php";
$db_handle = new DBController();

// This function is to clean the input to avoid sql injection
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $isAuthenticated = false;
	$idpengguna = sanitize_input($_POST["idpengguna"]);
    $password = sanitize_input($_POST["password"]);
    $email = sanitize_input($_POST["email"]);
    $sektor = sanitize_input($_POST["sektor"]);
    $nama_syarikat = sanitize_input($_POST["nama_syarikat"]);
    $lokasi = sanitize_input($_POST["lokasi"]);
    $no_telefon = sanitize_input($_POST["no_telefon"]);
    $no_telefon_2 = sanitize_input($_POST["no_telefon_2"]);
    $kekosongan = sanitize_input($_POST["kekosongan"]);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      
    //check if user is available
      $query_userchecks = "SELECT * FROM permohonan_syarikat WHERE username='$idpengguna'";
      $result_userchecks = $db_handle->getRecords($query_userchecks);
      $userchecks_returnvalue = $result_userchecks->num_rows ;
       
      // check is user email is available 
      $query_emailchecks = "SELECT * FROM permohonan_syarikat WHERE email='$email'";
      $result_emailchecks = $db_handle->getRecords($query_emailchecks);
      $emailchecks_returnvalue = $result_emailchecks->num_rows ;
    
      
      //check if nama_syarikat is available
      $query_syarikatchecks = "SELECT * FROM permohonan_syarikat WHERE nama_syarikat='$nama_syarikat'";
      $result_syarikatchecks = $db_handle->getRecords($query_syarikatchecks);
      $syarikatchecks_returnvalue = $result_syarikatchecks->num_rows ;
      
      if($userchecks_returnvalue > 0 || $emailchecks_returnvalue > 0  || $syarikatchecks_returnvalue > 0){
        echo "alreadyexist";
      } else {
        $role = "admin";
        $status = "pending";
        $registration_query = "INSERT INTO permohonan_syarikat (nama_syarikat,
         alamat, no_telefon, no_telefon_2, email, username, password, sektor,
          bilangan_pelatih, status, role) VALUES ( ?,?,?,?,?,?,?,?,?,?,?)";
        $registration_query_result = $db_handle->registration_insert($registration_query, 'sssssssssss',
         array($nama_syarikat, $lokasi, $no_telefon, $no_telefon_2, $email,
        $idpengguna, $hashed_password, $sektor, $kekosongan, $status, $role));
        if($registration_query_result){
            $sql_session = "SELECT * FROM permohonan_syarikat WHERE username='$idpengguna' AND password= '$hashed_password'";
            $result_session = $db_handle->getRecords($sql_session);
            if ($result_session->num_rows > 0) {
              while ($row = $result_session->fetch_assoc()) {
                $_SESSION["member_id"] = $row["id"];
                $_SESSION["role"] = $row['role'];
                $_SESSION["email"] = $row['email'];
                $_SESSION["name"] = $row['username'];
              }
                 echo "success";

                 //next email notification
            }
           
        } else{
            echo "error";
        }
      }
  
    }

   
  
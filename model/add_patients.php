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
	$identification = sanitize_input($_POST["identification"]);
    $patient_name = sanitize_input($_POST["patient_name"]);
    $email_address = sanitize_input($_POST["email_address"]);
    $blood_group = sanitize_input($_POST["blood_group"]);
    $mobile_number = sanitize_input($_POST["mobile_number"]);
    $address = sanitize_input($_POST["address"]);
    $health_status = sanitize_input($_POST["health_status"]);
    $pre_existing = sanitize_input($_POST["pre_existing"]);
    $date_of_birth = sanitize_input($_POST["date_of_birth"]);
    $gender = sanitize_input($_POST["gender"]);
    $query_patient = "INSERT INTO patients (identification, patient_name,address, mobile_number, email, blood_group, health_status, pre_existing,
    date_of_birth, gender) VALUES ('$identification', '$patient_name', '$address', '$mobile_number', '$email_address', '$blood_group', '$health_status', '$pre_existing', '$date_of_birth','$gender')";
    $insert_patient_data = $db_handle->insert_data($query_patient);
    
    if($insert_patient_data){
        echo "success";
    }
}
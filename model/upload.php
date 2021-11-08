<?php
session_start();
require_once("DBController.php");
require_once("DBConn.php");
$db_handle = new DBController();
$user = $_SESSION["member_id"];
// echo json_encode("uploaded");
//upload.php
//  if (file_exists($path_user.$path)) {
//    unlink($path_user.$path);
//  $test = explode('.', $_FILES["file1"]["name"]);
//  $ext = end($test);
//  $name = rand(100, 999) . '.' . $ext;

if(isset($_FILES["file1"]["name"])){
   if ($_FILES["file1"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file1"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file1"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_1 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}

if(isset($_FILES["file2"]["name"])){
   if ($_FILES["file2"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file2"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file2"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_2 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}

if(isset($_FILES["file3"]["name"])){
   if ($_FILES["file3"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file3"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file3"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_3 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}

if(isset($_FILES["file4"]["name"])){
   if ($_FILES["file4"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file4"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file4"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_4 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}

if(isset($_FILES["file5"]["name"])){
   if ($_FILES["file5"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file5"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file5"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_5 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}


if(isset($_FILES["file6"]["name"])){
   if ($_FILES["file6"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file6"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file6"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_6 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}

if(isset($_FILES["file7"]["name"])){
   if ($_FILES["file7"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
    mkdir($directory, 0777, true);
}
$name =  $_FILES["file7"]["name"];
$location = $directory. $name;  
// $location = $name;  
 if(move_uploaded_file($_FILES["file7"]["tmp_name"], $location)){
   $query = "UPDATE permohonan_syarikat SET file_7 = '$name' WHERE  id = '$user' ";
         $result = $db_handle->insert_data($query);
   echo ('file uploaded');
 }
 
}
}


if(isset($_FILES["file8"]["name"])){
  if ($_FILES["file8"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
   mkdir($directory, 0777, true);
}
$name =  $_FILES["file8"]["name"];
$location = $directory. $name;  
// $location = $name;  
if(move_uploaded_file($_FILES["file8"]["tmp_name"], $location)){
  $query = "UPDATE permohonan_syarikat SET logo = '$name' WHERE  id = '$user' ";
        $result = $db_handle->insert_data($query);
  echo ('file uploaded');
}

}
}

if(isset($_FILES["file9"]["name"])){
  if ($_FILES["file9"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
   mkdir($directory, 0777, true);
}
$name =  $_FILES["file9"]["name"];
$location = $directory. $name;  
// $location = $name;  
if(move_uploaded_file($_FILES["file9"]["tmp_name"], $location)){
  $query = "UPDATE permohonan_syarikat SET tempat = '$name' WHERE  id = '$user' ";
        $result = $db_handle->insert_data($query);
  echo ('file uploaded');
}

}
}

if(isset($_FILES["file10"]["name"])){
  if ($_FILES["file10"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
   mkdir($directory, 0777, true);
}
$name =  $_FILES["file10"]["name"];
$location = $directory. $name;  
// $location = $name;  
if(move_uploaded_file($_FILES["file10"]["tmp_name"], $location)){
  $query = "UPDATE permohonan_syarikat SET penginapan = '$name' WHERE  id = '$user' ";
        $result = $db_handle->insert_data($query);
  echo ('file uploaded');
}

}
}

if(isset($_FILES["file11"]["name"])){
  if ($_FILES["file11"]["name"] != '') {
$directory = "../documents/$user/";
if (!file_exists($directory)) {
   mkdir($directory, 0777, true);
}
$name =  $_FILES["file11"]["name"];
$location = $directory. $name;  
// $location = $name;  
if(move_uploaded_file($_FILES["file11"]["tmp_name"], $location)){
  $query = "UPDATE permohonan_syarikat SET pengangkutan = '$name' WHERE  id = '$user' ";
        $result = $db_handle->insert_data($query);
  echo ('file uploaded');
}

}
}

?>

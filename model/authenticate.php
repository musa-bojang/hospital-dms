<?php
session_start();
require_once "Auth.php";
require_once "Util.php";

$auth = new Auth();
$db_handle = new DBController();
$util = new Util();

require_once "authCookieSessionValidate.php";
// This function is to clean the input to avoid sql injection
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

// if (isset($_POST["login_button"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isAuthenticated = false;
    //echo " button clicked";
    // $username = $_POST["member_name"];
    // $password = $_POST["member_password"];
	$username = sanitize_input($_POST["username"]);
    $password = sanitize_input($_POST["password"]);
    
    $user = $auth->getMemberByUsername($username);
    if (password_verify($password, $user[0]["password"])) {
        $isAuthenticated = true;
    }
    
    if ($isAuthenticated) {
    $_SESSION["member_id"] = $user[0]["id"];
	$_SESSION["role"] = $user[0]['role'];
	$_SESSION["email"] = $user[0]['email'];
	$_SESSION["name"] = $user[0]['username'];
    

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $log_date = date('d-m-Y');
    $log_time = date('H:i:s');
    $log_username = $_SESSION["name"];
    $log_user_id = $_SESSION["member_id"];
    $user_role_log = $_SESSION["role"];
       
    $log_query = "INSERT INTO log_data (username, user_id, log_timer, log_date, location) VALUES ( ?,?,?,?,?)";
    $log_result = $db_handle->insert($log_query, 'sssss', array($log_username, $log_user_id, $log_time, $log_date, $user_role_log));
        
        // Set Auth Cookies if 'Remember Me' checked
        if (! empty($_POST["remember"])) {
            setcookie("member_login", $username, $cookie_expiration_time);
            
            $random_password = $util->getToken(16);
            setcookie("random_password", $random_password, $cookie_expiration_time);
            
            $random_selector = $util->getToken(32);
            setcookie("random_selector", $random_selector, $cookie_expiration_time);
            
            $random_password_hash = password_hash($random_password, PASSWORD_DEFAULT);
            $random_selector_hash = password_hash($random_selector, PASSWORD_DEFAULT);
            
            $expiry_date = date("Y-m-d H:i:s", $cookie_expiration_time);
            
            // mark existing token as expired
            $userToken = $auth->getTokenByUsername($username, 0);
            if (! empty($userToken[0]["id"])) {
                $auth->markAsExpired($userToken[0]["id"]);
            }
            // Insert new token
            $auth->insertToken($username, $random_password_hash, $random_selector_hash, $expiry_date);
        } else {
            $util->clearAuthCookie();
        }
        // $util->redirect("dashboard.php");
		echo "success";
    } else {
		echo "error";
        //$message = "Invalid Login";
    }
        }
  
// }
?>

<?php
// require_once("DBConn.php");
//$db_handle = new DBController();

// echo $username = $_POST["username"];
// echo $password = $_POST["password"];

//echo "ok";		
					
// if(!empty($_POST["username"])) {
//   $sql = "SELECT * FROM permohonan_syarikat WHERE username='$username' AND password=md5('$password')";
//   //$user_count = $db_handle->numRows($query);
  
//   $result = $conn->query($sql);
//   session_start();
//   if($result->num_rows > 0) {
	  
// 	  while($row = $result->fetch_assoc()) {
// 	  $_SESSION["id"] = $row['id'];
// 	  // $_SESSION["name"] = $row['nama_pemohon'];
// 	  $_SESSION["role"] = $row['role'];
//     $_SESSION["email"] = $row['email'];
//     $_SESSION["name"] = $row['username'];
// 	  }
	//   date_default_timezone_set("Asia/Kuala_Lumpur");
    // $log_date = date('d-m-Y');
    // $log_time = date('H:i:s');
    // $log_username = $_SESSION["name"];
    // $log_user_id = $_SESSION["id"];
    // $log_query = "INSERT INTO log_data (username, user_id, log_timer, log_date) VALUES ('$log_username',
    // '$log_user_id', '$log_time', '$log_date' )";
    // $log_result = $conn->query($log_query);
//     if($_SESSION["role"]== "officer"){
//       header('Location: ../search/index.php');
//     } else {
//       header('Location: ../dashboard.php');
//     }

      
//   }else{
// 	  $_SESSION["errorMessage"] = "Invalid Credentials";
//       header('Location: ../index.php');
//   }
 
// }
// else{
// 	echo "empty";
// }
?>
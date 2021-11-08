<?php
session_start();

require "Util.php";
$util = new Util();

//Clear Session
$_SESSION["member_id"] = "";
$_SESSION["role"] = "";
$_SESSION["email"] = "";
$_SESSION["name"] = "";
session_destroy();

// clear cookies
$util->clearAuthCookie();

header("Location: ../index.php");
?>
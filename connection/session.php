<?php
ob_start();
session_start();
//create a random encrpted url

$newScript = md5(rand(1,9));
$newPage = md5(rand(1,9));
$user_id = $_SESSION["user_id"];
$fname = $_SESSION["fname"];
$lname = $_SESSION["lname"];
$full_name = $fname . " " . $lname;

if (!isset($user_id)){
	header("logout.php");
}

if(!isset($fname) AND !isset($lname)){
    header("logout.php");
}

//check if the session username is set if not automatic logout
if(isset($user_id)){
    $first_initials = substr($fname, 0,1);
    $last_initials = substr($lname, 0,1);
    $initials = $first_initials . $last_initials;
}else{
    header("location: logout.php");
}






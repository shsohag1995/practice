<?php 
$server_name="localhost";
$user_name="root";
$pass="";
$db_name="marketsnetwork";

$connect=mysqli_connect($server_name,$user_name,$pass,$db_name);

if(!$connect){
	die("database connect error .");
}

 ?>
<?php
include("dbconfig.php");
//$connect=mysqli_connect("localhost","root","","ajax");

print_r($_POST);

$name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
 $strsql="INSERT INTO user (id,name, email,contact) VALUES(null,'$name','$email','$contact')";
 if(mysqli_query($connect,$strsql)){
 	echo " record insert successfull";
 }else{
 	echo mysqli_errno($connect);
 }
?>

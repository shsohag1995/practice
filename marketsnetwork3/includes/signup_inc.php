<?php

if(isset($_POST["submit"])){
    include_once("db_connect.php");
    $user_first_name =mysqli_real_escape_string($connect,$_POST["user_first_name"]);
    $user_last_name=mysqli_real_escape_string($connect,$_POST["user_last_name"]);
    $user_uid=mysqli_real_escape_string($connect,$_POST["user_uid"]);
    $email=mysqli_real_escape_string($connect,$_POST["email"]);
    $password=mysqli_real_escape_string($connect,$_POST["password"]);
    $birthday=mysqli_real_escape_string($connect,$_POST["birthday"]);
    $country=mysqli_real_escape_string($connect,$_POST["country"]);
    $gender=mysqli_real_escape_string($connect,$_POST["gender"]);
    if (empty($user_first_name)||empty($user_last_name)||empty($user_uid)||empty($email)||empty($password)||empty($birthday)||empty($country)||empty($gender)) {
        header("Location: ../signup.php?signup=empty");
        exit();
    }
    else
    {
        if(!preg_match("/^[ a-zA-Z]*$",$user_first_name)|| !preg_match("/^[a-zA-Z]*$",$user_last_name)){
             header("Location: ../signup.php?signup=invlidename");
             exit();
        }else
        {
            if (!filter_var($email, FILTER_VALIDAT_EMAIL){
                header("Location: ../signup.php?signup=invlidemail");
             exit();
            }else
            $sql="SELECT * FROM users WHERE user_uid='$user_uid'";
            $result=mysqli_query($connect,$sql);
            $resultcheck=mysqli_num_rows($result);

            if ($resultcheck>0) {
                 header("Location: ../signup.php?signup=usertaken");
                 exit();
            }else{
                 $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
                 $sql="INSERT INTO users (user_first_name,user_last_name,user_uid,email,password,birthday,gender)  VALUES ('$user_first_name','$user_last_name','$user_uid','$email','$hashedpassword','$birthday','$gender') ";
            }
            
        }
    }
}else{
	header("Location: ../signup.php");
	exit();
}

?>
<?php
?>
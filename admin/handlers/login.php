<?php
session_start();
include("../../handlers/connect.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM admins WHERE email='$email'";
$query=mysqli_query($conn,$sql);
$emailCount=mysqli_num_rows($query);
$adminData= mysqli_fetch_array($query);
if($emailCount>0){
    if(password_verify($password,$adminData['password'])){
        $_SESSION['id']=$adminData['id'];
        header("Location: add_admin.php");
    }
    else{
        $_SESSION['error']="invalid passwod";
        header("Location: ../login.php");
    }
}
else{
    $_SESSION['error']="invalid email";
    header("Location: ../login.php");
}


?>
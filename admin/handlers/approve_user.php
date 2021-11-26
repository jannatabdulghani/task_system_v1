<?php
session_start();
include("../../handlers/connect.php");
$uid=$_GET['userid'];
$sql = "UPDATE users SET statuse=1 WHERE id=$uid";
if(mysqli_query($conn,$sql)){
$_SESSION['success']='User updated successfully';
header("Location: ../showUsers.php");
}
?>
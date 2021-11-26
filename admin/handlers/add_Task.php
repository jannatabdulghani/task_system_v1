<?php
session_start();
include("../../handlers/connect.php");
$title=$_POST['title'];
$body=$_POST['body'];
$User_id=$_POST['User_Name'];
$sql="INSERT INTO tasks(title,body,user_id ) VALUES('$title', '$body', '$User_id')";
if(mysqli_query($conn,$sql)){
    $_SESSION['success']='Add task successfully';
    header("Location:../addTask.php");
}
/* CRUD: creat(insert) , Read(select) , update, Delet */
?>
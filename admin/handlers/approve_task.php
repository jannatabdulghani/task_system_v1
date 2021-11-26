<?php
session_start();
include("../../handlers/connect.php");
$tid=$_GET['taskId'];
$sql = "UPDATE tasks SET stautes=1 WHERE id=$tid";
if(mysqli_query($conn,$sql)){
$_SESSION['success']='Task updated successfully';
header("Location: ../showTasks.php");
}
?>
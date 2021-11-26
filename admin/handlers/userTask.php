<?php
$sql="SELECT tasks.id as taskId, title, body, tasks.stautes as taskStautes, users.id as userId,name,email FROM tasks JOIN 
users ON users.id =tasks.user_id";
$quryGetTasks= mysqli_query($conn, $sql);



?>
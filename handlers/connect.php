<?php

define("serverName",'localhost');
define("user",'root');
define("pass",'');
define("dbname",'systemtasks');

$conn=mysqli_connect(serverName, user, pass, dbname);

/*
if($conn){
    echo "Done";
}
else{
    echo "error";
}

*/
?>
<?php 

$conn = mysqli_connect("localhost","Gowtham",'1223334444','Students');

    if (!$conn){
        echo "Connection error:".mysqli_connection_error();
    }

?>
<?php
    $servername = "localhost";
    $username = "u0_a898";
    $password = "myPasswordChange"; 
    $dbname = "loginUser_db"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die ("Connection has failed". $conn->connect_error);
    }

?>
<?php
    $servername = "localhost";
    $username = "myUsername";
    $password = "myPasswordChange"; 
    $dbname = "phonebook"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn->connect_error){
        die ("Connection has failed". $conn->connect_error);
    }

?>
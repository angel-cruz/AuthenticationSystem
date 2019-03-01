<?php
    
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "root"; //check mamp for default pw
    $dbname = "my_db";

    // Create connection with db
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

?>
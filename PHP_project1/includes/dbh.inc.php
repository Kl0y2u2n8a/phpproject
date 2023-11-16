<?php
    $serverName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "userinfo";

    $conn = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);

    if(!$conn){
        die("Database connection failed: " . mysqli_connect_error());
    }
?>
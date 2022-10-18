<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "midtermtest";

    $con = mysqli_connect($host, $username, $password, $db_name);

    if (mysqli_connect_error())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
?>
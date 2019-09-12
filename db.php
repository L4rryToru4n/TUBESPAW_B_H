<?php
    $dbServer = "localhost";
    $username = "root";
    $password = "";
    $dbName = "GD4_9509_B";
    $con = mysqli_connect($dbServer, $username, $password, $dbName);
    if(mysqli_connect_errno())
    {
        echo"failed to connect to MySQL : ". mysqli_connect_error();
    }
?>
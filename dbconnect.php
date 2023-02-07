<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";

    global $conn;
    $conn = new mysqli($hostname,$username,$password);
    $conn->set_charset("utf-8");

    if (mysqli_connect_errno()) {
        echo "Database connect fail!!!!".mysqli_connect_error();
        exit();
    }
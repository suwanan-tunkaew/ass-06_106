<?php
    include "dbconnect.php";
    $cratedb = "CREATE DATABASE IF NOT EXISTS information_db";

    if ($conn->query($cratedb) === TRUE) {
        echo "<br/>Crate database succeed.";
    } else {
        echo "<br/>Crate database failed".mysqli_connect_error();
    }

    $conn->select_db("information_db");

    $createtable = "CREATE TABLE IF NOT EXISTS information(Code VARCHAR(25) NOT NULL PRIMARY KEY,
                                         section VARCHAR(5), Account VARCHAR(50), 
                                         Enter_Account VARCHAR(50),Accesslevel VARCHAR(25), 
                                         Username VARCHAR(50),replacing VARCHAR(50), 
                                         Payment VARCHAR(50))";

    if ($conn->query($createtable) === TRUE) {
        echo "<br/>Create student table succeed.";
    } else {
        echo "<br/>Create student table failed!!!".mysqli_connect_error();
    }

    echo "<br/>";
    echo '<center><h1><a href="index.php">Back</a></h1></center>';
    $conn->close();
<?php
    include "dbconnect.php";
    $conn->select_db("information_db");
 
     echo "<h1>Delete information in database</h1>";
     $Code = trim($_GET["Code"]);

     $deleterow = "DELETE FROM information WHERE Code = '{$Code}'";
     
     if ($conn->query($deleterow) === TRUE) {
         echo "<br/>Delete row succeed.";
     } else {
         echo "<br/>Delete row failed<br/>";
     }
     $conn->close();
     echo "<br/>";
     echo '<center><h1><a href="index.php">Back</a></h1></center>';
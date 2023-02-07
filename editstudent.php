<?php
    include "dbconnect.php";
    $conn->select_db("student_db");
 
     echo "<h1>Update student in database</h1>";
    $id = $_POST["id"];
    $insertrow = "INSERT INTO information
    $Code = $_POST["Code"];
    $section = "";
    for ($i=0; $i<count($_POST["section"]); $i++)
    {
        $section .= $_POST["section"][$i]." ";
    }

    $Account = $_POST["box1"];
    $Enter_Account = $_POST["box2"];
    $Accesslevel = $_POST["box3"];
    $Username = $_POST["username"];
    $Code = $_POST["Code"];

    if ($_POST["replacing"] == "Yes") {
        $replacing = "Yes";
    }
    else {
        $replacing = "No";
    }

    if ($_POST["Payment"] == "Yes") {
        $Payment = "Yes";
    }
    else {
        $Payment = "No";
    }
 
     $updaterow = "UPDATE information SET section = '{$section}',
                                       box1 = '{$Account}',
                                       box2 = '{$Enter_Account}',
                                       box3 = '$Accesslevel',
                                       Username = '$Username',
                                       replacing = '$replacing',
                                       Payment = '$Payment' WHERE Code = '{$Code}'";
     
     if ($conn->query($updaterow) === TRUE) {
         echo "<br/>Update row succeed.";
     } else {
         echo "<br/>Update row failed<br/>";
     }
     $conn->close();
     echo "<br/>";
     echo '<h1><center><a href="index.php">Back to main</a><center></h1>';
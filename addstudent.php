<?php
   include "dbconnect.php";
   $conn->select_db("information_db");
    echo "<h1>Insert new information into database</h1>";
    
    $section = "";
    for ($i=0; $i<count($_POST["section"]); $i++)
    {
        $section .= $_POST["section"][$i]." ";
    }

    $Account = $_POST["box1"];
    $Enter_Account = $_POST["box2"];
    $Accesslevel = $_POST["box3"];
    $Username = $_POST["username"];
    $Code = $_POST["password"];

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
    
    $insertrow = "INSERT INTO information
    VALUES('{$section}', '{$Account}, '{$Enter_Account}, '{$Accesslevel}, '{$Username}, '{$Code}, '{$replacing}, '{$Payment});";
    

    if ($conn->query($insertrow) === TRUE) {
        echo "<br/>Insert new row succeed.";
    } else {
        echo "<br/>Insert new row failed<br/>";
    }
    $conn->close();
    echo "<br/>";
    echo '<h1><center><a href="addform.php">Back to form</a></h1></center>';
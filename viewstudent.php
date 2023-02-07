<html>
    <head>
        <meta charset="utf-8">
        <title>แสดงข้อมูลในตาราง</title>
    </head>
    <style>
        table {
            width: 80%;
            border: 2px solid black;
        }

        th {
            width: 50px; 
            border: 2px solid;
        }

        tr {
            width: 50px;
            border: 2px solid;
        }

        td {
            width: 50px;
            border: 2px solid;
            text-align: center;
        }
    </style>
    <body>
        <h1>รายชื่อ</h1>
        <?php
            include 'dbconnect.php';
            $conn->select_db("information_db");
            $query = "SELECT * FROM information ORDER BY Code";
            
            if ($result = $conn->query($query)) {
               /*    */
            }
            else
            {
                echo "เกิดข้อผิดพลาด : " . mysqli_connect_error()."<br>";
            }

            //***
            echo "<table><tr>";
            echo "<th style=''>Macquarie Access Code: </th>";
            echo "<th>Choose one of the three options below: </th>";
            echo "<th>Account/Facility name</th>";
            echo "<th>Enter Account/Facility number</th>";
            echo "<th>Access level</th>";
            echo "<th>User name:</th>";
            echo "<th>Is this User replacing the existing User nominated above?:</th>";
            echo "<th>Do you wish to assign a Daily Payment Authorisation Limit for this User?</th>";
            echo "</tr>\n";

            while ($result_ar = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $result_ar['Code'] . "</td>";
                echo "<td>" . $result_ar['section'] . "</td>";
                echo "<td>" . $result_ar['Account'] . "</td>";
                echo "<td>" . $result_ar['Enter_Account'] . "</td>";
                echo "<td>" . $result_ar['Accesslevel'] . "</td>";
                echo "<td>" . $result_ar['Username'] . "</td>";
                echo "<td>" . $result_ar['replacing'] . "</td>";
                echo "<td>" . $result_ar['Payment'] . "</td>";
                echo "</tr>\n";
            }
            echo "</table><br/>";
            $conn->close();
            echo '<h1><center><a href="index.php">Back</a></center></h1>';
        ?>
    </body>
</html>
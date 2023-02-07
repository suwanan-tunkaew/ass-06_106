<html>
    <head>
        <title>ฟอร์มแก้ไขข้อมูล</title>
    </head>
    <body>
    <style>
        form {
            border: 1px solid blue;
            width: 300px;
            margin-left: auto;
            margin-right: auto;
            padding: 5px;
        }
        input {
            margin-top : 5px;
        } 
    </style>
    <body>
        <?php
            include 'dbconnect.php';
            $conn->select_db("information_db");
            $Code = trim($_GET['Code']);
            $query = "SELECT * FROM information WHERE Code = '$Code'";

            if ($result = $conn->query($query)) {
                
            }
            else {
                echo "ขอโทษรหัส $Code ไม่พบในฐานข้อมูล". mysqli_error()."<br/>";
            }

            while ($result_array = mysqli_fetch_array($result)) {
                $Code = $result_array['Code'];
                $section_arr = explode(" ",trim($result_array['section']));
                $Account = $result_array['box1'];
                $Enter_Account = $result_array['box2'];
                $Accesslevel = $result_array['box3'];
                $Username = $result_array['Username'];
                $replacing = $result_array['replacing'];
                $Payment = $result_array['Payment'];
                
            }
            $conn->close();
        ?>
        <form action="editstudent.php" method="post">
            <input type="hidden" name="Code" value= "<?php echo $Code ?>"><br/>
            <label for="Enter_Account">Enter_Account : </label>
            <input type="text" name="box1" value = "<?php echo $Enter_Account ?>"><br/>
            <label for="Accesslevel">Accesslevel : </label>
            <input type="text" name="box2" value = "<?php echo $Accesslevel ?>"><br/>
            <label for="Accesslevel">Accesslevel : </label>
            <input type="text" name="box3" value = "<?php echo $Accesslevel ?>"><br/>
                <legend> replacing </legend>
            <input type="radio" name="replacing" value="No" <?php if ($replacing === "No") echo "checked"?>>No<br/>
            <input type="radio" name="replacing" value="Yes" <?php if ($replacing === "Yes") echo "checked"?>>Yes<br/>
                <legend> Payment </legend>
            <input type="radio" name="Payment" value="No" <?php if ($Payment === "No") echo "checked"?>>No<br/>
            <input type="radio" name="Payment" value="Yes" <?php if ($Payment === "Yes") echo "checked"?>>Yes<br/>
            
            <br/>
            <?php
                $section_name = array('Specify the accounts and access levels requied for the User','Copy account and access levels from an existing User','Copy existing user access plus specify additional access');
                function chkTalent($str,$arr) {
                    if (in_array($str,$arr)) {
                        return "checked";
                    }
                }
            ?>
            <fieldset>
                <legend> section </legend>
                <?php foreach ($section_name as $items) {?>
                        <input type="checkbox" name="section[]" value="<?php echo($items)?>"
                        <?php echo chkSection($items,$section_arr)?>><?php echo $items?><br/>
                <?php } ?>
            </fieldset>
            <input type="submit" name="submit" value="Edit">
            <input type="reset" name="reset" value="Clear">
        </form>
        <h1><center><a href="index.php">Back</a><center></h1>
    </body>
</html>
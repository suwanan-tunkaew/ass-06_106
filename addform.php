<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name= "viewpost" content="width-device-width, initial-scale=1.0">
        <title>กลุ่มเมธามาศ</title>
    </head>
    <body>
    <style>
        form {
            border: 5px solid black;
            width: 1300px;
            margin-left: auto;
            margin-right: auto;
            padding: 10px;
        }
        input,select {
            margin-top : 5px;
        }
        fieldset {
            margin-top: 10px;
        }
        button {
            margin-left: 5px, 5px, 10px;
            width: 120px;
            padding: 5px;
        }
    </style>

    <body>
        <div>
            <form name="frommain" method="POST" action="addstudent.php" >

                <div>
    &nbsp;<font size = 15 ><b> 3 Nominate User access levels (required)</b></font><br>
    Choose one of the three options below: <br> 

    <input type="checkbox" name="section[]" value="seaction_A">Specify the accounts and access levels requied for the User ▶
    <b> complete section A</b><br>
    <input type="checkbox" name="section[]" value="seaction_B">Copy account and access levels from an existing User ▶
    <b>complete section B</b><br>
    <input type="checkbox" name="section[]" value="seaction_AB">Copy existing user access plus specify additional access ▶
    <b>complete section A and B*</b><br>
    <b>*Note:</b>
    in the event of an inconsistency in the inconsistency in the information you provide in section A and section B of this from. your instruction in section A will prevail <br>
  </from>

    <p style="background-color:#000000"><font color="#FFFFFF">SECTION A</p></font>
    <caption> The access levels available are: </caption >
    <table width="100%" border=1 >
    <tr width="150"><tr> <td bgcolor="# 000000"><font color="#FFFFFF"> View </td></font> 
    <td> Allows a User to view account and transaction details only.</td></tr>
    <tr><td bgcolor="# 000000"><font color="#FFFFFF"> Create </td></font> 
    <td> Allows a User to view account and transaction details, roll-over Term Deposits, generate transactions, request a bank cheque, stop cheque payments and initiate open and closure requests. Opening an account without an initial funds
    transfer and switching to online statements do not require authorisation. Create access does not allow the User to
    authorise transactions. </td></tr>
    <tr><td bgcolor="# 000000"><font color="#FFFFFF"> Sole Authorise </td></font> 
    <td> Allows a User to authorise transactions and account openings and closures solely. You can have multiple Users with sole
    authorise access. Does not include create access. </td</tr>
    <tr><td bgcolor="# 000000"><font color="#FFFFFF"> Dual Authorise </td></font> 
    <td> Allows a User to authorise transactions and account openings and closures, but only in conjunction with another
    authoriser. You can have multiple Users with dual authorise access. Does not include create access. </td></tr>
    
  <tr>
    <td colspan="2" align="left"> ADDITIONAL FUNCTIONALITY: 
    <tr><td bgcolor="# 000000"><font color="#FFFFFF"> Download </td></font> 
      <td> Allows a User to download account and transaction data via Macquarie Download files for use with compatible software platforms. Download files may contain a group of accounts and their setup can be discussed with your
      Relationship Manager. </td></tr>
    </td>
  </tr></table>
      <b>Indicate which accounts and facilities are to be accessed and what level of access is required. You MUST tick all levels of access
      required. Please complete all fields.</b><br><br>

<table width="100%" length="1" border="1" bordercolor="white" >
        <tr>
<!-- table 1 -->
            <th rowspan="5">Account/Facility name
     <br><br><br>
    <p>1 <input type="text" id="box1" name="box1" size="50"></p>
    <p>2 <input type="text" id="box1" name="box1" size="50"></p>
    <p>3 <input type="text" id="box1" name="box1" size="50"></p>
    <p>4 <input type="text" id="box1" name="box1" size="50"></p>
    <p>5 <input type="text" id="box1" name="box1" size="50"></p>
    <p>6 <input type="text" id="box1" name="box1" size="50"></p>
    <p>7 <input type="text" id="box1" name="box1" size="50"></p>
    </form>
   </th>
<!-- table 2 -->
            <th rowspan="5">Enter Account/Facility number
     <br><br><br>
  <p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>
  <p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>      
<p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>        
<p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>    
<p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>
<p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>    
<p><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2"
size="1"><input type="text" id="box2" name="box2" 
size="1"><input type="text" id="box2" name="box2"
size="1"></p>
   </th>

<!-- table 3 -->
            <th colspan="5">Access level</th>
        </tr>
        <tr>
            <th bgcolor ="black"><font color ="white">View</font></th>
            <th bgcolor ="black"><font color ="white">Create</font></th>
            <th bgcolor ="black"><font color ="white">Sole<br>Auth</font></th> 
            <th bgcolor ="black"><font color ="white">Dual<br>Auth</font></th>
            <th bgcolor ="black"><font color ="white">Down-<br>load</font></th>
        </tr>
      <th><input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        </th>

        <th><input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        </th>
        
        <th><input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        </th>

        <th><input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        </th>

        <th><input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        <input type="text" id="box3" name="box3" size="1"></p>
        </th>
        </th>
       </table>

    <p style="background-color:#000000"><font color="#FFFFFF">SECTION B</p></font>
      <b>Copy accounts and facilities and access levels from an existing User.</b>
      <p>Access details of existing User:</p>
<!-- แก้ -->
      <label for="username">User name:</label>
      <input type="text" id="username" name="username">
      <label for="password">Macquarie Access Code:</label>
      <input type="password" id="password" name="password">
<!-- แก้ -->
      <p>Is this User replacing the existing User nominated above?</p> 
  
      <input name="replacing[]" type="radio" value="No" checked>No<br>
      <input name="replacing[]" type="radio" value="Yes">Yes<b> ▶ Please note we will delete access for the Macquarie Access Code above.</b>
    
  
    <p style="background-color:#000000"><font color="#FFFFFF">SECTION C (OPTIONAL)</p></font>
      <b>Optional for Sole or Dual Authorise access levels only-set a Daily Payment Authorisation Limit.</b>
      <p>A Daily Payment Authorisation Limit will prevent the User from authorising payments totalling more than the limit applied (per business day).</p>
      <p>All payments authorised will be included in the authorisation limit. Any authorisation limit is applied per Macquarie Access Code.</p>
      <p>Amendments to an authorisation limit will require approval from authorised signatories, so please set a limit that is adequate for your business needs.</p>
      <b>Do you wish to assign a Daily Payment Authorisation Limit for this User?</p>
    
      <input name="Payment" type="radio" value="No" checked>No <b> รหัสผ่าน</label> ▶go to section 4 </b><br>
      <input name="Payment" type="radio" value="Yes">Yes ▶ 
      
<!-- แก้ -->
      Amount:
      <input type="text" id="amount" name="amount" placeholder="$">
<!--  -->
    </form>
    <br>
      <center><button type="submit">Add</button>
      <button type="reset">Clear</button></center><br>
    </form>
    <center><h1><a href="index.php">Back</a></h1></center>
    </div>
  </body>
</html>
<?php
    session_start();

    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = "base_food";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error)
    {
        die("Can't connect database");
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="calendar.css" type="text/css" />
        <link rel="stylesheet" 
              href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" 
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
                body {
                      background-image: url(1.jpg);
                      background-repeat: no-repeat;
                      background-attachment: fixed; 
                      background-size: 100% 100%;
                      background-position: center;
                }
                .input {
                        background-color: rgb(255, 145, 0);
                        width:40%;
                        height:40%;
                        padding:3%;
                        text-align:left;
                        margin-left:30%;
                        margin-top:10%;
                        background-attachment: fixed; 
                        background-position: center;
                }  
                .icon {
                       text-align: center;
                       margin-left:5%;
                       
                }
                .btlogin {
                       background-color: rgb(255, 226, 71);
                }
        </style>
</head>
<body>
    <div align='center'>
    <form action="BranchDB.php" method="post" name="Address">
        <h1 style='color: white'>Location</h1>
        <select id="Branch_name" name="Address">
            <option value="" >อำเภอ</option>
            <option value="อำเภอคลองหลวง" name="อำเภอคลองหลวง" id="Address">อำเภอคลองหลวง</option>
            <option value="อำเภอธัญบุรี" name="อำเภอธัญบุรี" id="Address">อำเภอธัญบุรี</option>
            <option value="อำเภอลำลูกกา" name="อำเภอลำลูกกา" id="Address">อำเภอลำลูกกา</option>    
            <option value="อำเภอสามโคก" name="อำเภอสามโคก" id="Address">อำเภอสามโคก</option>  
            <option value="อำเภอเมืองปทุมธานี" name="อำเภอเมืองปทุมธานี" id="Address">อำเภอเมืองปทุมธานี</option>  
        </select>
        <input name="btnSubmit" type="submit" value="Go!"><BR><BR>
        <a href="Index.php" style="text-align:center; color: white" >ย้อนกลับ</a><br>
        <a href="Logout.php" style="text-align:center; color: white">ออกจากระบบ</a><br>
    </form>
    </div>
       </body>
</html>
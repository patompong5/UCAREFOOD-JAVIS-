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
    $Address = $_POST['Address'];
    $query = "SELECT * FROM branch 
              INNER JOIN phone 
              ON branch.Branch_name = phone.Branch_name
              WHERE  Address = '$Address'";
    $result = mysqli_query($conn, $query); 
    echo "<h1 align='center' style='color: white'> สาขาใกล้เคียง </h1>";
    echo "<table border='1' align='center' width='800'>";
    echo "<tr align='center' bgcolor='#CCCCCC'><td>สาขา</td><td>เบอร์ติดต่อ</td><td>ที่อยู่</td></tr>";
    while($row = $result->fetch_assoc()) 
        {             
            echo "<tr style='color: white'>";
            echo "<td style='color: white'>" .$row["Branch_name"] .  "</td> "; 
            echo "<td style='color: white'>" .$row["Phone"] .  "</td> ";
            echo "<td style='color: white'>" .$row["Address"] .  "</td> ";
            echo "</tr>";           
        }
    echo "</table>";
        mysqli_close($conn);    
?>
    <!DOCTYPE html>
<html>
    <head>
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
    <center>
        <a href="Branch.php" style="text-align:center; color: white" >ย้อนกลับ</a><br>
        <a href="Logout.php"  style="text-align:center; color: white">ออกจากระบบ</a><br>
    </center>
</html>


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
</head>
<?php
    session_start();
    $_SESSION['UID'] = 'UID';
    $servername = "localhost";
    $username = 'root';
    $password = '';
    $dbname = "base_food";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if($conn->connect_error)
    {
        die("Can't connect database");
    }
    
    $sql = "SELECT *  
            FROM fav_food AS d1
            JOIN food AS d2
            ON (d1.Food_id = d2.Food_id)
            JOIN users AS d3
            ON (d1.UID = d3.UID)
            ORDER BY d1.Food_id";
    $result = mysqli_query($conn, $sql); 
    echo "<h1 align='center' style='color: white'> รายการโปรด </h1>";
    echo "<table border='1' align='center' width='800'>";
    echo "<tr align='center' bgcolor='#CCCCCC'><td>Menu</td><td>Calories</td><td>Sodium</td><td>Carbohydrates</td><td>Sugars</td><td>Protein</td></tr>";
    while($row = mysqli_fetch_array($result)) 
        {             
            echo "<tr>";
            echo "<td align='center' style='color: white'>" .$row["Food_name"] .  "</td> ";
            echo "<td align='center' style='color: white'>" .$row["Calories"] .  "</td> ";
            echo "<td align='center' style='color: white'>" .$row["Sodium"] .  "</td> ";
            echo "<td align='center' style='color: white'>" .$row["Carbohydrates"] .  "</td> ";
            echo "<td align='center' style='color: white'>" .$row["Sugars"] .  "</td> ";
            echo "<td align='center' style='color: white'>" .$row["Protein"] .  "</td> ";
            echo "</tr>";
        }
    echo "</table><br>";
    mysqli_close($conn);
?>
<html>
    <center>
        <a href="Index.php" style="text-align:center; color: white" >ย้อนกลับ</a><br>
        <a href="Logout.php"  style="text-align:center; color: white">ออกจากระบบ</a><br>
    </center>
</html>
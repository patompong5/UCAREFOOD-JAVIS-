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
    <div align='center'>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align='center' style="color: white">UCARE FOOD</h1>
        <form action="LoginDB.php" method="post">
            <a style="color: white">Email :</a>
        <input type="text" name="Email"> 
        <button type="submit">Login</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <a style="color: white">Powered By JAVIS GROUP (CS251 2/2019) Com-Sci Thammasat University</a>
        </form>
    </div>
</html>

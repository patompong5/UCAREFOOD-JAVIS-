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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="calendar.css" type="text/css" />
<link rel="stylesheet" 
              href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" 
              href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:13px;width:13px;padding:0}
            body {
                      background-image: url(2.jpg);
                      background-repeat: no-repeat;
                      background-attachment: fixed; 
                      background-size: 100% 100%;
                      background-position: center;
                }
            .profile {
                width:13%;
                height:27%;
                position: fixed;
                left: 1%;
                top : 2%;
                background-repeat: no-repeat;
                background-attachment: scroll;
            }
            .bg {
                background-color: rgb(255, 145, 0);
                background-repeat: no-repeat;
                background-attachment: scroll;
                text-align: center;
            }
</style>
<div class="w3-bar w3-black">
  <a  class="w3-bar-item ">Home</a>
  <a href="Food.php" class="w3-bar-item w3-button">รายการอาหาร</a>
  <a href="Branch.php" class="w3-bar-item w3-button">ค้นหาสาขา</a>
  <a href="FavFoodDB.php" class="w3-bar-item w3-button">รายการโปรด</a>
  <a href="Logout.php" class="w3-bar-item w3-button">ออกจากระบบ</a>
</div>
<div class="w3-content w3-display-container" style="margin-left:20%" >
    <img class="mySlides" src="kfc.jpg" style="width: 100%; height: 500px">
    <img class="mySlides" src="mac.jpg" style="width: 100%; height: 500px">
    <img class="mySlides" src="bkk.jpg" style="width: 100%; height: 500px">
    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
    </div>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>
</html>




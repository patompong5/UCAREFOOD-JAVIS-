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
        <title>Ucare Food</title>
    </head>
    <div style="text-align:center">
    <form action="FoodDB.php" method="post" name="Brand_name" >
        <h1 style="color: white"> เลือกอาหาร </h1>
        <a style="color: white">Brand:</a><br></br>
        <select id="Brand_name" name="Brand_name" >
            <option value="">-------------</option>
            <option value="McDonald’s" name="McDonald’s" id="Brand_name">McDonald’s</option>
            <option value="KFC" name="KFC" id="Brand_name">KFC</option>
            <option value="Burger King" name="Burger King" id="Brand_name">Burger King</option>           
        </select><br></br>
        <a style="color: white">Category:</a><br></br>
        <select id="Category" name="Category">
            <option value="">-------------</option>
            <option value="Breakfast" name="Breakfast" id="Category">Breakfast</option>
            <option value="Meal " name="Meal " id="Category">Meal</option>  
            <option value="Salads" name="Salads" id="Category">Salads</option>
            <option value="Snack" name="Snack" id="Category">Snack</option>
            <option value="Desserts" name="Desserts" id="Category">Desserts</option>            
            <option value="Beverages" name="Beverages" id="Category">Beverages</option>
        </select><br></br>
         <a style="color: white">Calories น้อยกว่า :</a><br></br>
         <input type="number" name="Calories" id="Calories">&nbsp;<a style="color: white">Calories</a><br></br>
         <a style="color: white">Sodium น้อยกว่า</a><br></br>
         <input type="number" name="Sodium" id="Sodium">&nbsp;<a style="color: white">mg</a><br></br>
        <a style="color: white">Carbohydrates น้อยกว่า</a><br></br>
        <input type="number" name="Carbohydrates" id="Carbohydrates">&nbsp;<a style="color: white">g</a><br></br>
        <a style="color: white">Sugars น้อยกว่า</a><br></br>
        <input type="number" name="Sugars" id="Sugars">&nbsp;<a style="color: white">g</a><br></br>
        <a style="color: white">Protein น้อยกว่า</a><br></br>
        <input type="number" name="Protein" id="Protein">&nbsp;<a style="color: white">g</a><br></br>
        <input name="btnSubmit" type="submit" value="GO!"><br><br><br><br><br><br>
        <a href="Index.php" style="text-align:center; color: white" >ย้อนกลับ</a><br>
        <a href="Logout.php" style="text-align:center; color: white">ออกจากระบบ</a><br>
    </form>
        </div>
       </body>
</html>
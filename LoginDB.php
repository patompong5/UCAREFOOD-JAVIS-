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
    
    if(isset($_POST['Email'])&&$_POST['Email']!=NULL)
    {
        $Email = $_POST['Email'];      
        $stmt = $conn->prepare("SELECT UID FROM users WHERE Email = ?");
        $stmt->bind_param('s', $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if($ID = $result->fetch_assoc())
        {
            $_SESSION["ID"] = $ID['UID'];
            header('Location: Index.php');
        }
        else
        {
            $SQL = "insert into users (Email) values ('$Email')";
            mysqli_query ($conn, $SQL);
            print_r($SQL);
            header('Location: Index.php');
        }
    }
    else 
    {
        echo '<script language="javascript">';
        echo 'alert("Need Email!")';
        echo '</script>';
    }
?>
    


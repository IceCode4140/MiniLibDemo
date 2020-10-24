<!DOCTYPE html>
<html>
<body>
<?php
    session_start();
    header("content-type:text/html;charset=UTF-8");
    
    require_once('connect.php'); 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 

        $username = mysqli_escape_string($db,$_POST["username"]); 
        $password = mysqli_escape_string($db,$_POST["password"]); 


        $sql= "SELECT admin_username, admin_password FROM admin WHERE 
        admin_username = '$username' AND admin_password= '$password'";

        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
        $num_row = mysqli_num_rows($result);
        if($num_row == 1 )
        {
            $_SESSION['username'] = $username;
            header("Location: admin_center.php");
        }
        else 
        { 
            header("Location: admin_index.php?msg=failed"); 
        } 
    }

?> 

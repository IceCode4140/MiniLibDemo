<?php  
    session_start();
    require_once("connect.php");

    //check if login before
    require_once("memberlogin_check.php");

    $sql = "DELETE FROM members WHERE username = '{$_SESSION['username']}'"; 
    mysqli_query($db,$sql) or  die (mysqli_error($db));
    
    unset($_SESSION["username"]);
    header("location:home_index.html"); 
?>

<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Delete Action</title>
</head>
<body>
<?php  
    session_start();
    require_once("connect.php");

    //check if login before
    require_once("memberlogin_check.php");

    $sql = "DELETE FROM members WHERE username = '{$_SESSION['username']}'"; 
    echo $sql;
    mysqli_query($db,$sql) or  die (mysqli_error($db));
    
    unset($_SESSION["username"]);
    header("location:home_index.html"); 
?>
</body>
</html>
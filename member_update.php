<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Updat Action</title>
</head>
<body>
<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    
    
    //confirm if login before
    require_once("memberlogin_check.php");

    $name = mysqli_escape_string($db,$_POST["name"]); 
    $gender = mysqli_escape_string($db,$_POST["gender"]); 
    $year = mysqli_escape_string($db,$_POST["year"]); 
    $month = mysqli_escape_string($db,$_POST["month"]); 
    $day = mysqli_escape_string($db,$_POST["day"]); 
    $email = mysqli_escape_string($db,$_POST["email"]); 
    $Member_ID = mysqli_escape_string($db,$_POST["id"]); 
    $birthday= $year."-".$month."-".$day;

    //update profile
    $sql2 = "UPDATE members SET name= '$name', gender='$gender',
    birthday='$birthday', email='$email' WHERE Member_ID ='$Member_ID'"; 
    echo $sql2."<br>";
    
    mysqli_query($db,$sql2) or die (mysqli_error($db));
    header("Location:member_center.php");
?>
</body>
</html>

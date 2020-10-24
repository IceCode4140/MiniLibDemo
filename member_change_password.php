<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Change Password</title>
</head>
<body>
<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    require_once("memberlogin_check.php");

    if(isset($_POST["submit"]))
    {
        $password = mysqli_escape_string($db,$_POST["password1"]);  
        $hash_passwd = password_hash($password, PASSWORD_DEFAULT);
        $Member_ID = mysqli_escape_string($db,$_POST["id"]); 
    
    
        $sql="UPDATE members SET password = '$hash_passwd' WHERE Member_ID ='$Member_ID'";
        mysqli_query($db,$sql) or die (mysqli_error($db));
        //logout
        unset($_SESSION["username"]);
        header("location:member_index.php"); 
    }
    else 
    {
        header("location:member_change_password_form.php"); 
    }
?>
</body>
</html>

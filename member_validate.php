<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Validation</title>
</head>
<body>
<?php 
    header("content-type:text/html;charset=UTF-8");
    session_start();
    include_once('connect.php');   
  
    if ($_SERVER["REQUEST_METHOD"]== "POST") 
    { 
        $username = mysqli_escape_string($db,$_POST["username"]); 
        $password = mysqli_escape_string($db,$_POST["password"]); 

        $sql = "SELECT * FROM members WHERE username ='$username'";
        $result = mysqli_query($db,$sql) or die(mysqli_error($db));
        $num_row = mysqli_num_rows($result);
        
        if($num_row == 1 )
        {
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row['password'])) 
            { 
                $_SESSION['username'] = $username;
                header("Location: member_center.php");
            }
            else
            {
                header("Location: member_index.php?msg=failed"); 
            }
        }
        else 
        { 
            header("Location: member_index.php?msg=failed"); 
        } 
    }  
  
?> 
</body>
</html>

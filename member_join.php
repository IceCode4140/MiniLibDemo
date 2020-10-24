<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Join Action</title>
</head>
<body>
<?php  
    require_once("connect.php");

    $name = mysqli_escape_string($db,$_POST["name"]); 
    $username = mysqli_escape_string($db,$_POST["username"]); 
    $password = mysqli_escape_string($db,$_POST["password"]); 
    $gender = mysqli_escape_string($db,$_POST["gender"]); 
    $year = mysqli_escape_string($db,$_POST["year"]); 
    $month = mysqli_escape_string($db,$_POST["month"]); 
    $day = mysqli_escape_string($db,$_POST["day"]); 
    $email = mysqli_escape_string($db,$_POST["email"]); 
    $birthday= $year."-".$month."-".$day;

    $hash_passwd = password_hash($password, PASSWORD_DEFAULT);//important

    $sql = "SELECT username FROM members WHERE username = '$username'";
    $result = mysqli_query($db,$sql);   
    $num_row = mysqli_num_rows($result);

    if($num_row > 0)
    {
        //username is already taken
        header("Location:member_join_form.php?msg=failed");
    }
    else
    {
        //add new user
        $sql2 = "INSERT INTO members( name, username, password, gender, birthday, email) VALUES
        ('$name', '$username','$hash_passwd','$gender', '$birthday', '$email' )"; 
        mysqli_query($db,$sql2) or die (mysqli_error($db));
        mysqli_close($db);
    } 

?>
<script language="javascript">
    window.alert("Register successful!Visit login page.");
    window.location.href="member_index.php";
</script>
</body>
</html>




 





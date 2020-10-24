<!DOCTYPE html>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Add Member Register Form</title>
</head>
<body>
<?php  
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $stmt = mysqli_prepare($db ,"INSERT INTO members (name, username, password, gender, birthday, email) VALUES (?,?,?,?,?,?)");
        if(false === $stmt ) 
        {
           die('prepare() failed: ' . htmlspecialchars($mysqli->error));
        }  
        $test = mysqli_stmt_bind_param($stmt , 'ssssss', $name, $username, $hash_passwd, $gender, $birthday, $email);
        $name = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $year = $_POST["year"]; 
        $month = $_POST["month"]; 
        $day = $_POST["day"];
        $birthday= $year."-".$month."-".$day;
        $email = $_POST['email'];

        $hash_passwd = password_hash($password, PASSWORD_DEFAULT);//important

        if(false === $test) 
        {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        } 
        $test = mysqli_stmt_execute($stmt);
        if(false === $test) 
        {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        } 
        //if show " 1 rows inserted" means successful
        //if show "-1 rows inserted" means failure ,check if username is taken or other problems
        //printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));  
    }
    else
    {
        header("Location:admin_add_member.php");
    }
?>
<script language="javascript">
    window.alert("Check Member List.");
    window.location.href="admin_delete_member.php";
</script>
</body>
</html>

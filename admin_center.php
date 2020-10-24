<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    require_once("adminlogin_check.php");
?>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Admin Center</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    
       .box{
            margin-top:10px;
            text-align:center;
            font-family: 'Poppins', sans-serif;
            font-weight:300;
            font-size: 20px;
        }
    </style>
</head>
<body>  
<?php require_once("admin_menu.php");?><br>
    <div class="box">
        <h2>Welcome to Admin Center</h2><br>
            <p>Admin can add/delete members</p><br>
            <p>Admin can add/delete books</p><br>
            <p>Admin can search borrow/expire record</p>
            <br>
    </div>
</body>
</html>
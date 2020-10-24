<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    require_once("memberlogin_check.php");
?>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Center</title>
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
<?php require_once("member_menu.php");?><br>
    <div class="box">
        <h2>Welcome to Member Center</h2><br>
            <p>Member can update own profile</p><br>
            <p>Member can change password</p><br>
            <p>Member can borrow e-books in Library</p><br>
            <p>There is no need to return e-books</p><br>
            <p>E-books will automatically expire at the end of the lending period</p><br>
            <p>Member can check borrow record </p><br>
            <p>Member can delete own account</p><br>
            <br>
    </div>
</body>
</html>
    
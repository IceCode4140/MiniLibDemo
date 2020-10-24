<!DOCTYPE html>				
<html>				
<head>				
    <meta charset="UTF-8">				
    <meta name="viewport" content="width=device-width, initial-scale=1.0">				
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    /*CSS Variables*/	
    :root {	
        --primary:#ddd;	
        --dark:#333;	
        --light:#fff;
        --base:#2e4ead;;	
    }
                    
    body {
        background:var(--base);	
        margin: 15px;
        margin-top: 50px;
    }

    .login-form,
    .login-form * {
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }

    .login-form {
        max-width: 350px;
        margin: 0 auto;
        border-radius: 5px;
        overflow: hidden;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    }

    .title{
            font-size: 20px;
            font-weight: 600;
            text-align: center;
            line-height: 60px;
            color: #fff;
            user-select: none;
            background: rgba(0, 0, 0, 0.25);
        } 
    

    .content {
        padding: 10px;
        background: #eeeeee;
    }

    .input {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 2px solid #dddddd;
        background: var(--light);
        outline: none;
        transition: border-color 0.5s;
    }

    .input::placeholder {
        color: var(--dark);
    }

    .button {
        padding: 10px;
        color: var(--light);
        font-weight: bold;
        background: var(--base);
        width: 100%;
        border: none;
        outline: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button:active {
        background: var(--base);
    }

    .links {
        margin-top: 15px;
        text-align: center;
    }

    .link {
        font-size: 0.9em;
        color: var(--dark);
        text-decoration: none;
    }

</style>
 <body>
    <form class="login-form" action="admin_validate.php" method="post" >
        <div class="title">Admin Login </div>
        <div class="content">
                <input class="input" type="text" name="username" maxlength="20" size="20" placeholder="Username">
                <input class="input" type="password" name="password" maxlength="20" size="20" placeholder="Password">
                <button class="button" type="submit">Login</button>
                <div class="links">
                    <a class="link" href="home_contact.html">Forgot your password?<span style="font-weight:bold"> Contact Admin</span></a>
                </div>
        </div>
    </form>
    <?php 
        if (isset($_GET["msg"]) && $_GET["msg"] == 'failed') 
        {
        echo "<script language='javascript'>"; 
        echo "alert('Invalid Username/Password ,Please Try Again')"; 
        echo "</script>";  
        }
    ?>
</body>
</html>	


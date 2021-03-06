<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');

    /*CSS Variables*/	
    :root {	
        --primary:#ddd;	
        --dark:#333;	
        --light:#fff;
        --base:#FF7F50;	
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    } 

    nav {
        display: flex;
        height: 80px;
        width: 100%;
        background: var(--base);
        align-items: center;
        justify-content: space-between;
        padding: 0 50px 0 100px;
        flex-wrap: wrap;
    }

    nav .logo {
        color: var(--light);
        font-size: 35px;
        font-weight: 600;
    }

    nav ul {
        display: flex;
        flex-wrap: wrap;
        list-style: none;
    }

    nav ul li {
        margin: 0 5px;
    }

    nav ul li a {
        color: #f2f2f2;
        text-decoration: none;
        font-size: 18px;
        font-weight: 500;
        padding: 8px 15px;
        border-radius: 5px;
        letter-spacing: 1px;
        transition: all 0.3s ease;
    }

    nav ul li a.active,
    nav ul li a:hover {
        color: #111;
        background: var(--light);
    }

    nav .menu-btn i {
        color:var(--light);
        font-size: 22px;
        cursor: pointer;
        display: none;
    }

    input[type="checkbox"]{
       display: none;
    }

    @media (max-width: 1000px){
        nav{
            padding: 0 40px 0 50px;
        }
    }

    @media (max-width: 920px) {
        nav .menu-btn i{
            display: block;
        }

        #click:checked ~ .menu-btn i:before{
            content: "\f00d";
    }

    nav ul {
        position: fixed;
        top: 80px;
        left: -100%;
        background: #111;
        height: 100vh;
        width: 100%;
        text-align: center;
        display: block;
        transition: all 0.3s ease;
    }

    #click:checked ~ ul {
        left: 0;
    }

    nav ul li {
        width: 100%;
        margin: 40px 0;
    }

    nav ul li a {
        width: 100%;
        margin-left: -100%;
        display: block;
        font-size: 20px;
        transition: 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    }

    #click:checked ~ ul li a {
        margin-left: 0px;
    }

    nav ul li a.active,
    nav ul li a:hover {
            background: none;
            color:var(--base);
        }
    }
    .content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        z-index: -1;
        width: 100%;
        padding: 0 30px;
        color: var(--dark);
    }
    .content div{
        font-size: 40px;
        font-weight: 700;
    }

    </style>
  </head>
  <body>
    <nav>
        <div class="logo">
              Member
        </div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a id="Home" class="active" href="member_center.php">Home</a></li>
            <li><a id="Profile" href="member_update_form.php">Profile</a></li>
            <li><a id="ChangePW" href="member_change_password_form.php">Change Password</a></li>
            <li><a id="Borrow" href="member_borrow.php">Find Book</a></li>
            <li><a id="Record" href="member_record.php">Borrow Record</a></li>
            <li><a href="member_delete.php" onClick="return confirm('Are you sure you want to delete account?')" 
             type="button">Delete Account</a><br>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <script>
        function ClearActive()
        {
            let home = document.getElementById("Home");
            home.classList.remove("active");
        }
        function SetActive(e)
        {
            ClearActive();
            e.classList.add("active");
        }
    </script>
</body>
</html>

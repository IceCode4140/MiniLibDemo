<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    
    //confirm if login before
    require_once("memberlogin_check.php");

    $username = $_SESSION['username'];
    $sql = "SELECT * FROM members WHERE username = '$username'";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Member Management System</title>
<script language="javascript"> 
      function checkForm()
      {
        if(document.form1.password1.value == "" || document.form1.password2.value == "")
        {   
            window.alert("please enter empty blank");
            document.form1.password1.focus();
            return false;
        }
        if(document.form1.password1.value != document.form1.password2.value)
        {
              window.alert("please enter same password");
              document.form1.password1.focus();
              return false;
        }
        return confirm("confirm to send?")
      }
</script> 
</head>
<body>
<?php require_once("member_menu.php");?>
  <div class="box"> 
    <table style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
          <tr valign="top">
          <td width="500">
            <form name="form1" method="post" action="member_change_password.php" onSubmit="return checkForm()">
            <h1>Change Password</h1>
            <hr size="1"><br>
                <p><strong>Username</strong>: <?php echo $row['username'];?></p><br>
                <p><strong>New Password</strong>:
                  <input type="password" name="password1" minLength="5" maxlength="20" required><br>
                </p><br>
                  <p><strong>Confirm Password</strong>:
                  <input type="password" name="password2" minLength="5" maxlength="20" required><br>
                </p><br>
                <hr size="1"/><br>
                <p align="center"> 
                  <input name="id" type="hidden" value="<?php echo $row['Member_ID'];?>">
                  <input type="submit" name="submit" value="Submit">
                  <input type="reset" name="reset" value="Reset">
                </p>
            </form>
          </td>
          </tr>
    </table>
  </div>
  <script>
        SetActive(document.getElementById("ChangePW"));
    </script>
</body>
</html>


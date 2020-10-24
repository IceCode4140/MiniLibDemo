<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    require_once("adminlogin_check.php");
?>
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Add Book Form</title>
    <script language="javascript">

        function checkForm()
        {
            if(document.form1.title.value == "")
            {
                window.alert("please enter title");
                document.form1.title.focus();
                return false;
            }
            if(document.form1.author.value == "")
            {
                window.alert("please enter author");
                document.form1.author.focus();
                return false;
            }
            if(document.form1.category.selectedIndex == 0)
            {
                window.alert("please enter category");
                document.form1.category.focus();
                return false;
            }
            else 
            return confirm("Submit?");            
        }

    </script>
</head>
<body>
<?php require_once("admin_menu.php");?>
    <table style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
        <tr valign="top">
        <td width="600">
            <form name="form1" method="post" action="admin_addbook_action.php" onSubmit="return checkForm()">
                <h1>Add New Book</h1><br>
                <hr size="1"><br>
                <p><strong>Title</strong>:
                    <input type="text" name="title"  minLength="5" maxlength="50" required>
                    <font color="#FF0000">*</font>
                </p><br>
                <p><strong>Author</strong>:
                    <input type="text" name="author" minLength="5" maxlength="20" required >
                    <font color="#FF0000">*</font>
                </p><br>
                <p><strong>Register_ID</strong>:
                    <input type="text" name="Register_ID" value="1" disabled="true">
                    <font color="#FF0000">*</font>
                </p><br>
                <p><strong>Category</strong>:
                <select name="category">
                    <option>- Category -</option>
                    <option value="art">Art</option>
                    <option value="biography">Biography</option>
                    <option value="comic">Comic</option>
                    <option value="computer">Computer</option>
                    <option value="entertainment">Entertainment</option>
                    <option value="fiction">Fiction</option>
                    <option value="medical">Medical</option>      
                    <option value="kids">Kids</option>
                    <option value="sport">Sport</option>
                    <option value="travel">Travel</option>
                </select>
                <font color="#FF0000">*</font></br></br>
                <hr size="1"></br></br>
                <p align="center">
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </p><br>
            </form>
        </td>
        </tr>
    </table>  
    <script>   
          SetActive(document.getElementById("AddBook"));
    </script>
</body>
</html>
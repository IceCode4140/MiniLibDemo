<!DOCTYPE html>
<html>
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Delete Book</title>
</head>
</body>
<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");

    //check if login before
    require_once("adminlogin_check.php");

    if (isset($_GET['b_no']) && !empty( $_GET['b_no'] ))
    {
        $sql = "DELETE FROM books where Book_ID = $_GET[b_no]";
        echo $sql;
        mysqli_query($db,$sql) or die(mysqli_error($db));
        header("location:admin_delete_book.php");
    }
    else
    {
        header("location:admin_delete_book.php");
    } 
?>
</body>
</html>
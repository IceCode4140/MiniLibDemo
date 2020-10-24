<?php  
    session_start();
    require_once("connect.php");

    if (isset($_GET['b_no']) && !empty( $_GET['b_no'] ))
    {
        $sql = "DELETE FROM books where Book_ID = $_GET[b_no]";
        mysqli_query($db,$sql) or die(mysqli_error($db));
        header("location:admin_delete_book.php");
    }
    else
    {
        header("location:admin_delete_book.php");
    } 
?>
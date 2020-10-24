<?php  
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");

    if (isset($_GET['m_no']) && !empty( $_GET['m_no'] ))
    {
        $sql = "DELETE FROM members where Member_ID = $_GET[m_no]";
        mysqli_query($db,$sql) or die(mysqli_error($db));
        header("location:admin_delete_member.php");
    }
    else
    {
        header("Location:admin_delete_member.php");
    }
 
?>
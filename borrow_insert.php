<?php
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");

    // get Member_ID
    $username = $_SESSION['username'];
    $sql0 = "SELECT Member_ID FROM members WHERE username='$username'";
    $sql2 = mysqli_query($db,$sql0) or die ($error_message);
    $list = mysqli_fetch_array($sql2);
    $Member_ID = $list['Member_ID'];


    //get information of borrow book
    $sql3 = "SELECT * FROM books where Book_ID = $_GET[bk_id]";
    $result = mysqli_query($db,$sql3);
     while($row = mysqli_fetch_assoc($result))
    {
        $Book_ID = $row['Book_ID'];
        $title = $row['title'];
        $author = $row['author'];
        $category = $row['category']; 
    }  


   if (isset($_GET['bk_id']))
    {
        $sql4 = "INSERT INTO records( Member_ID, Book_ID, title, author, category,borrowDate, expireDate) VALUES
        ('$Member_ID','$Book_ID', '$title', '$author', '$category',  NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY))";

        mysqli_query($db,$sql4) or die(mysqli_error($db));
        mysqli_close($db);
    }
?>
<script language="javascript">
    window.alert("Borrow successful!Please check Reading List.");
    window.location.href="member_record.php";
</script>


 
      
    





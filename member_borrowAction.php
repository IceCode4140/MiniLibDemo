<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Add Member Register Form</title>
</head>
<body>
<?php
    session_start();
    require_once("connect.php");
    //check if login 
    require_once("memberlogin_check.php"); 
    $username = $_SESSION['username'];

    // get Member_ID
    $sql0 = "SELECT Member_ID FROM members WHERE username='$username'";
    $sql2 = mysqli_query($db,$sql0) or die (mysqli_error($db));
    $list = mysqli_fetch_array($sql2);
    $Member_ID = $list['Member_ID'];

    //get information of borrow book
    $sql3 = "SELECT * FROM books where Book_ID = $_GET[bk_id]";
    $result = mysqli_query($db,$sql3) or die (mysqli_error($db));
    $row = mysqli_fetch_assoc($result);
    $Book_ID = $row['Book_ID'];

    
   if (isset($_GET['bk_id']) && !empty($_GET['bk_id']))
   {
        $sql4 = "SELECT * FROM records where Member_ID = $Member_ID  AND Book_ID = $Book_ID";
        $result = mysqli_query($db,$sql4) or die (mysqli_error($db));
        $num_row = mysqli_num_rows($result);
        if( $num_row == 1)
        {
            header("Location: member_borrow.php?msg=failed"); 
        }
       else
       {
            $sql4 = "INSERT INTO records( Member_ID, Book_ID, borrowDate, expireDate) VALUES
            ('$Member_ID','$Book_ID', NOW(), DATE_ADD(NOW(), INTERVAL +14 DAY))";

            mysqli_query($db,$sql4) or die(mysqli_error($db));
            mysqli_close($db); 
       }
   }
   else
   {
      header("Location:member_borrow.php");
   }

?>
<script language="javascript">          
    window.location.href="member_record.php";
 </script>
</body>
</html>
 
      
    





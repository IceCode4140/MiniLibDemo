<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Add Book</title>
</head>
<body>
<?php  
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $stmt = mysqli_prepare($db ,"INSERT INTO books (title, author, category, Register_ID) VALUES (?,?,?,?)");
        if(false === $stmt ) 
        {
           die('prepare() failed: ' . htmlspecialchars($mysqli->error));
        }  
        $test = mysqli_stmt_bind_param($stmt , 'sssi', $title, $author, $category, $Register_ID);
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $Register_ID = 1; // Register_ID set 1 for foreign key 
     
        if(false === $test) 
        {
            die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        } 
        $test = mysqli_stmt_execute($stmt);
        if(false === $test ) 
        {
            die('execute() failed: ' . htmlspecialchars($stmt->error));
        }
        // Change test.
        //if show " 1 rows inserted" means successful
        //if show "-1 rows inserted" means failure ,check if username is taken or other problems
        //printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));  
    }
    else
    {
        header("Location:admin_add_book.php");
    }
?>
<script language="javascript">
    window.alert("Check Book List.");
    window.location.href="admin_delete_book.php";
</script>
</body>
</html>


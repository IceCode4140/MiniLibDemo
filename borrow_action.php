<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    

    $title = $_POST["title"];
    $sql = "SELECT Book_ID ,title, author, category From books WHERE category ='$title'";
    $result = mysqli_query($db,$sql) or die(mysqli_error($db));
    $num_rows = mysqli_num_rows($result);
?> 
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Online Library E-books</title>
    <style>
        .container{
            margin-left:300px;
            float:left;
        }

        .menu{
            margin-left:-150px;
            float:left;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
        }

        table.center {
            margin-left: auto; 
            margin-right: auto;
        }
</style>
</head>
<body>
    <div class="container">
        <h1>Search Result</h1>
        <hr size="1"/>
        <form method="post" action="borrow_insert.php">
        <?php
        
            if($num_rows > 0 )
            {
                echo "<table><tr><th>Book_ID</th><th>Titlt</th><th>Author</th><th>Category</th>";
            
                while ($row = mysqli_fetch_assoc ($result))
                {
                    echo "<tr><td>".$row["Book_ID"]."</td><td>".$row["title"]."</td><td>".$row["author"]."</td><td>".$row["category"]."</td></tr>";
                }

                echo "<tr></table></br>";
            }

            else
            {
                echo "0 results</br>";
            }  
            mysqli_close($db);
        ?>
        <input type="submit" name="submit" value="Borrow"/>
        </form>
    </div>
    <div class="menu">
        <?php require_once("member_menu.php");?>
    </div>
</body>
</html>

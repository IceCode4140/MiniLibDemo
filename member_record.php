<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    //check if login before
    require_once("memberlogin_check.php");

?> 
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Borrow Record</title>
    <style>
         .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1em;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
        }

        .content-table thead tr {
            background-color:#333;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 12px 15px;
        }

        .content-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .content-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
       
    </style>
</head>
<body>
<?php require_once("member_menu.php");?>
    <table class="content-table" style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
        <thead>
            <tr>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Borrow Date</th>
                <th>Expire Date</th>
           </tr>
    </thead>
    <tbody>
        <?php
            //get Member_ID
            $username = $_SESSION['username'];
            $sql = "SELECT Member_ID FROM members WHERE username='$username'";
            $sql0 = mysqli_query($db,$sql) or die ($error_message);
            $result = mysqli_fetch_assoc($sql0);
            $Member_ID = $result['Member_ID'];
    
            $sql2 = "SELECT records.Member_ID, books.title, books.author, books.Book_ID,
            books.category, records.borrowDate,records.expireDate FROM records 
            INNER JOIN books ON books.Book_ID = records.Book_ID
            WHERE Member_id ='$Member_ID'";

            $result2 = mysqli_query($db, $sql2) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result2))
            {
            ?>
                <tr>
                    <td><?php echo $row['Book_ID'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['borrowDate'];?></td>
                    <td><?php echo $row['expireDate'];?></td>
                </tr>
            <?php
            }
        ?>             
    </tbody>
    </table> 
    <script>
        SetActive(document.getElementById("Record"));
    </script>
</body>
</html>
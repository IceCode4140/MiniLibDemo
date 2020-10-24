<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    //check if login 
    require_once("adminlogin_check.php");
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
            min-width: 300px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
        }

        .content-table thead tr {
            background-color: #333;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .content-table th,
        .content-table td {
            padding: 10px 10px;
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
<?php require_once("admin_menu.php");?>
    <table class="content-table" style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
        <thead>
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Book ID</th>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>Borrow Date</th>
                <th>Expire Date</th>
            </tr>
        </thead>
        <?php

            $sql = "SELECT books.title, books.author, books.Book_ID, books.category, records.borrowDate,
            records.expireDate, records.Member_ID, members.username  
            from records 
            INNER JOIN books ON books.Book_ID = records.Book_ID 
            INNER JOIN members ON members.Member_ID = records.Member_ID";

            $result = mysqli_query($db, $sql) or die (mysqli_error($db));
            while ($row = mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td><?php echo $row['Member_ID'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['Book_ID'];?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php echo $row['author'];?></td>
                    <td><?php echo $row['category'];?></td>
                    <td><?php echo $row['borrowDate'];?></td>
                    <td><?php echo $row['expireDate'];?></td>
                </tr-->
                <?php
            }
        ?>     
    </table> 
    <script>
        SetActive(document.getElementById("Borrow"));
</script>
</body>
</html>
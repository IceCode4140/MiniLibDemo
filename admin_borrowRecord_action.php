<?php 
    session_start();
    header("content-type:text/html;charset=UTF-8");
    require_once("connect.php");
    //check if login 
    require_once("memberlogin_check.php");
?> 
<html>				
<head>							
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8">	
    <title>Borrow Detail</title>
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
<?php require_once("admin_menu.php");?>
<table class="content-table" style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
    <thead>
        <th>Member_ID</th>
        <th>Book_ID</th>
        <th>Borrow Date</th>
        <th>Expire Date</th>
    </thead>
    <?php
        if (isset($_GET['m_no']) && !empty($_GET['m_no']))
        {
            $sql = "SELECT * FROM records WHERE Member_ID = '$_GET[m_no]'";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
                $Member_ID = $row['Member_ID'];
                $Book_ID = $row['Book_ID'];
                $borrowDate = $row['borrowDate'];
                $expireDate = $row['expireDate'];
                $expireDate = $row['expireDate']; 
            ?>
                <tr>
                    <td><?php echo $row['Member_ID'];?></td>
                    <td><?php echo $row['Book_ID'];?></td>
                    <td><?php echo $row['borrowDate'];?></td>
                    <td><?php echo $row['expireDate'];?></td>
                </tr>
            <?php
            }
        }
        else
        {
            header("Location:admin_borrow_record.php");
        }
    ?>     
</table> 
</body>
</html>

 
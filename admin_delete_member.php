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
    <title>Member list</title>
    <style>
         .content-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 1em;
            min-width: 600px;
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
        a { 
            color:#333;
            text-decoration: none; 
        }

    </style>
</head>
<body>
<?php require_once("admin_menu.php");?>
<table class="content-table" style="margin-left:auto;margin-right:auto;padding:2px;border-spacing:20px;">
    <thead>
        <tr>
            <th>Member ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql = "SELECT * FROM members";
            $result = mysqli_query($db, $sql);
            while ($row = mysqli_fetch_assoc($result))
            {
            ?>
                <tr>
                    <td><?php echo $row['Member_ID'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['gender'];?></td>
                    <td><?php echo $row['birthday'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><button><a href="admin_deleteAction.php?m_no=<?php echo $row['Member_ID'];?>"
                    onClick="return confirm('Are you sure you want to delete this user?')">Delete</a></td>
                </tr>
            <?php
            }
        ?>     
    <tbody>
    </table> 
    <script>
        SetActive(document.getElementById("DeleteMember"));
    </script>
</body>
</html>

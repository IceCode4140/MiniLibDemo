<!DOCTYPE html>
<html>
<body>
<?php

    define('DB_SERVER', '127.0.0.1');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'login');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(!$db)
      echo "System Error!please contact to admin.";

?>
</body>
</html>

<?php

    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'id15214154_root');
    define('DB_PASSWORD', 'MiaoMiao1989!');
    define('DB_DATABASE', 'id15214154_books_db');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

    if(!$db)
      echo "System Error!please contact to admin.";

?>

<?php
    session_start();
    unset($_SESSION["username"]);
    header("location:home_index.html");
?>



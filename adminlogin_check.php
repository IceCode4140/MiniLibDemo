<?php
  //check if login before
  if(!isset($_SESSION["username"]) || ($_SESSION["username"] ==""))
  {
    header("Location:admin_index.php");
  }
    
?>

<!DOCTYPE html>
<html>
<body>
<?php
  //check if login before
  if(!isset($_SESSION["username"]) || ($_SESSION["username"] ==""))
  {
    header("Location:member_index.php");
  }
    
?>
</body>
</html>

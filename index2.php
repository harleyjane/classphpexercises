<!DOCTYPE html>
<html>
  <?php
  if($_GET['name'] == "Sam") 
  {
    // not special name entered
  echo "Hello.";
  } else 
  {
  echo "Hello Sam," . $_GET['name'];
  }
  ?>
</html>
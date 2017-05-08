<!DOCTYPE html>
<html>
  
    
<?php
  // $_GET =
  // [ "password" => "banana"]
  
  // arr = ["cat", "dog", "bird"]
  // [ 0 => "cat",
  // 1 => "dog",
  
  $passwordtext = $_GET["password"];
  
  $password = "4444";

  if($password == $passwordtext) { ?>
    <div>
      THIS HTML IS SHOWING BECAUSE YOU HAVE A GOOD PASSWORD.
    </div>
     <?php ;
  }
  else {
     echo "You've entered the wrong password."; 
  }
?>  
</html>

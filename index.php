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

  if($password == $passwordtext) {
    echo "This is the page you are looking for.";
  }
  else {
     echo "You've entered the wrong password."; 
  }

?>

</html>

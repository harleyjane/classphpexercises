<!DOCTYPE html>
<html>
<?php
  if($password == $passwordtext)
{
$_SESSION["userid1"] = $id1;
header("Location: https://mysite.com/members/index.php"); // redirects
}
else
{
unset($_SESSION["userid1"]);
$_SESSION["msg"] = "<li>Login Info - Username
/Password:  Incorrect Combination try again</li>";
}

?>
</html>

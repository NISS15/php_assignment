<!DOCTYPE html>
<?php
$msg="";
if(isset($_POST['password'])) {
  $password = $_POST['password'];
  $number = preg_match('@[0-9]@', $password);
  $uppercase = preg_match('@[A-Z]@', $password);
  $lowercase = preg_match('@[a-z]@', $password);
  $specialChars = preg_match('@[^\w]@', $password);
  if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
    $msg = "0";
  } else {
    $msg = "1";
  }
}
?>
<html>
<head>
 <title>Validate password strength in PHP </title>
</head>
<body>
<h3>Validate password strength </h3>
  <form method="POST">
    <input type="password" name="password" required />
    <input type="submit" value="Check" /><br />
    <span><?php echo $msg?></span>
  </form>
</body>
</html>
?>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form submission</title>
</head>
<body>
  <form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

  </form>

<?php
if (isset($_POST['submit'])) {

$username = $_POST['username'];
$password = $_POST['password'];

echo "Hello " . $username . "<br>";
echo "Your password is " . $password;
}

 ?>

</body>
</html>

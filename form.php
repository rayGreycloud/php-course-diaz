<?php
if (isset($_POST['submit'])) {

  $names = array("Yoda", "Darth", "Obi-Wan", "Luke", "Leia", "Han", "Chewbacca");
  $minimum = 5;
  $maximum = 10;

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (strlen($username) < $minimum) {
    echo "Username must be at least 5 characters" . "<br>";
  }
  if (strlen($username) > $maximum) {
    echo "Username cannot exceed 10 characters" . "<br>";
  }

  if (!in_array($username, $names)) {
    echo "Sorry, username not found";
  } else {
    echo "Welcome " . $username;
  }

// echo "Hello " . $username . "<br>";
// echo "Your password is " . $password;
}

 ?>

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

</body>
</html>

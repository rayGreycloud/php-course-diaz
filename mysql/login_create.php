<?php

if(isset($_POST['submit'])) {

  $username = $_POST['username'];
  $password = $_POST['password'];
// Connect to db
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if ($connection) {
    echo "We are connected";
  } else {
    die("Database connection failed");
  }
  // SQL
  $query = "INSERT INTO users(username, password) ";
  // .= concatenate operator
  $query .= "VALUES ('$username', '$password')";
  // Save to db
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED: ' . mysqli_error());
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

  <div class="col-sm-6">

    <form action="login_create.php" method="post">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control">
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="text" name="password" class="form-control">
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Submit">

  </div>

</div>

</body>
</html>

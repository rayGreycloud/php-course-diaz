<?php include "db.php";

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED: ' . mysqli_error());
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

      <div class="form-group">
        <select name="id" id="">
          <option value="">1</option>
        </select>
      </div>

      <input class="btn btn-primary" type="submit" name="submit" value="Update">
    </form>

  </div>

</div>

</body>
</html>
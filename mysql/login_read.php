<?php

$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

  if ($connection) {
    echo "We are connected";
  } else {
    die("Database connection failed");
  }

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

  <?php
  // query for associative array
  while($row = mysqli_fetch_assoc($result)) {
    ?>

    <pre>
      <?php
        print_r($row);
      ?>
    </pre>

    <?php

  }

  ?>

  </div>

</div>

</body>
</html>

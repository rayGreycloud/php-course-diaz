<?php include "db.php";?>
<?php include "functions.php";?>

<?php
  global $connection;

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED: ' . mysqli_error());
  } else {
    echo "Records read.";
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Read</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container">

  <div class="col-sm-6">
    <h1 class="text-center">Read</h1>
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

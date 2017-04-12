<?php include "db.php";?>

<?php

function showAllData() {
  global $connection;

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED: ' . mysqli_error());
  }

  while($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];

    echo "<option value='$id'>$id</option>";
  }
}

function UpdateTable() {
  global $connection;

  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "UPDATE users SET ";
  $query .= "username = '$username', ";
  $query .= "password = '$password' ";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query failed." . mysqli_error($connection));
  }
}

?>

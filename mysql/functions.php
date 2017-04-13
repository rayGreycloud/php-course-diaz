<?php include "db.php";?>

<?php

function createRows() {

  if(isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL
    $query = "INSERT INTO users(username, password) ";
    // .= concatenate operator
    $query .= "VALUES ('$username', '$password')";
    // Save to db
    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query FAILED: ' . mysqli_error());
    } else {
      echo "Record created.";
    }
  }
}

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

function updateTable() {
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

function deleteRow() {
  global $connection;

  $id = $_POST['id'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "DELETE FROM users ";
  $query .= "WHERE id = $id ";

  $result = mysqli_query($connection, $query);

  if (!$result) {
    die("Query failed." . mysqli_error($connection));
  }
}

?>

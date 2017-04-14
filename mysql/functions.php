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

function createRows() {

  if(isset($_POST['submit'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize to prevent SQL injection 
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "INSERT INTO users(username, password) ";

    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die('Query FAILED: ' . mysqli_error());
    } else {
      echo "Record created.";
    }
  }
}

function readRows() {
  global $connection;
  $query = "SELECT * FROM users";
  $result = mysqli_query($connection, $query);

  if (!$result) {
    die('Query FAILED: ' . mysqli_error());
  } else {
    echo "Your Records:" . "<br>";
  }

  while($row = mysqli_fetch_assoc($result)) {
    print_r($row);
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
  } else {
    echo "Record updated.";
  }
}

function deleteRow() {
  if (isset($_POST['submit'])) {
    global $connection;

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      die("Query failed." . mysqli_error($connection));
    } else {
      echo "Record deleted.";
    }
  }
}

?>

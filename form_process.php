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

}

?>

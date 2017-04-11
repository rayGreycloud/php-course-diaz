<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form submission</title>
</head>
<body>
  <form action="form.php" method="post">

    <input type="text" placeholder="Enter Username">
    <input type="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

  </form>

<?php
if (isset($_POST['submit'])) {
  echo "Working!";
}

 ?>

</body>
</html>

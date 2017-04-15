<?php
if ($_POST) {
echo $_POST['name'];
} else {
  echo "Input will show here.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

  <form action="the_post.php" method="post">

    <input type="text" name="name">
    <input type="submit">

  </form>

<?php



?>

</body>
</html>

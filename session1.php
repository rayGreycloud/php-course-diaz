<?php
  session_start();

  if (!$_SESSION) {

    $_SESSION['greeting'] = "Hola Amigo";
    echo "greeting has been set";
  } else {
    echo $_SESSION['greeting'];
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
  <h2>Sessions 1</h2>



</body>
</html>

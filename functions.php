<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

function say_Something() {
  echo "Four score and seven years ago...";
}

function init() {
  echo "Starting something now";
  echo "<br>";

  say_Something();
}

init();

?>
</body>
</html>

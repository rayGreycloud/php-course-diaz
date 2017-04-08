<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
$a = 4;
$b = 4;
$c = 10;
$d = "4";

if ($a == $b) {
  echo "a is equal to b" . "<br>";
} else if ($a === $b) {
  echo "a is identical to b" . "<br>";
}

if ($b < $c) {
  echo "b is less than c" . "<br>";
} else {
  echo "b is greater than c" . "<br>";
}

if ($a === $b && $b !== $c) {
  echo "both statements are true" . "<br>";
}

if ($a == $b || $c != $d) {
  echo "one of the statements is true" . "<br>";
}

if ($a == $d) {
  echo "number 4 equals string 4" . "<br>";
}

if ($a === $d) {
  echo "number 4 is identical to string 4" . "<br>";
} else {
    echo "number 4 is not identical to string 4" . "<br>";
}



?>

</body>
</html>

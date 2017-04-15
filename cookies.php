<?php

$name = "DarthVader";
$value = 123456789012;
$expiration = time() + (60 * 60 * 24 * 730);

setcookie($name, $value, $expiration);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cookies</title>
</head>
<body>
  <h2>Cookie service</h2>


<?php



?>

</body>
</html>

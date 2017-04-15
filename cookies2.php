<?php

$name = "TestCookie2";
$value = 12345678901;
$expiration = time() + (60 * 60 * 24 * 7);

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

  if (isset($_COOKIE["TestCookie2"])) {
    $cookie2 = $_COOKIE["TestCookie2"];
  } else {
    $cookie2 = "No cookies yet";
  }

  echo $cookie2;
?>

</body>
</html>

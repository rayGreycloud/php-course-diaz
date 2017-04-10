<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$x = "outside"; // global

function convert() {
global $x;
$x = "inside";  // local

}

echo $x;

convert();
echo "<br>";
echo $x;
?>

</body>
</html>

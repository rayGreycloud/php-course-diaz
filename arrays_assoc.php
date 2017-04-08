<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

$number = array(10, 20, 49);

print_r("Array:");
echo "<br>";
print_r($number);

echo "<br>";

print_r("Associative Array:");
echo "<br>";
$names = array("first_name" => "Darth", "last_name" => 'Vader');

print_r($names["first_name"] . " " . $names["last_name"]);

?>


</body>
</html>

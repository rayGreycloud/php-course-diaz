<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
</head>
<body>

<?php

$list = [101, 12, 45, 28, 115, 55, 7];
// maximum value
echo max($list);
echo "<br>";
// minimum value
echo min($list);
echo "<br>";

// Sort
sort($list);

// print
print_r($list);
echo "<br>";

?>
</body>
</html>

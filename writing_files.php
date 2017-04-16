<?php

$file = "example.txt";

if ($handle = fopen($file, 'w')) {

  fwrite($handle, "This is dummy info for the file.");

  fclose($handle);
} else {

  echo "Unable to write file";

}

?>

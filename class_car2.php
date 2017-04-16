<?php

class Car {

  function MoveWheels() {
    echo "Wheels move";
  }

}

if (method_exists("Car", "MoveWheels")) {
  echo "MoveWheels method exists.";
} else {
  echo "MoveWheels method does not exist.";
}

echo "<br>";

if (method_exists("Car", "StopWheels")) {
  echo "StopWheels method exists.";
} else {
  echo "StopWheels method does not exist.";
}

?>

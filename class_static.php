<?php

class Car {
  // static is attached to class only
  static $wheels = 4;
  var $engine = 3.2;

  function changeWheelNumber($number) {
    Car::$wheels = $number;
  }

}
// Reference to static variable
echo "car wheels :" . Car::$wheels . "<br>";

$semi = new Car();

$semi->changeWheelNumber(10);

echo "semi wheels: " . Car::$wheels . "<br>";

Car::changeWheelNumber(4);

echo Car::$wheels;
?>

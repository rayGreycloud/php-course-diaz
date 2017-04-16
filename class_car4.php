<?php

class Car {

  var $make = "BMW";
  var $engine = 3.2;
  var $doors = 2;

  function showStats() {
    echo "make: " . $this->make . "<br>";
    echo "engine: " . $this->engine . "<br>";
    echo "doors: " . $this->doors . "<br>";
  }

  function changeStats($prop, $value) {
    $this->$prop = $value;
  }
}

$bmw = new Car();

$bmw->showStats();

$bmw->engine = 4.0;
$bmw->doors = 4;
$bmw->showStats();

$bmw->changeStats("doors", 3);
$bmw->showStats();
?>

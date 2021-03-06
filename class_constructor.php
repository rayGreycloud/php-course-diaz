<?php

class Car {
  function __construct() {
    $this->fuel = "gas";
    $this->engine = 3.2;
    $this->doors = 2;
  }

  function showStats() {
    echo "fuel: " . $this->fuel . "<br>";
    echo "engine: " . $this->engine . "<br>";
    echo "doors: " . $this->doors . "<br>";
  }

  function changeStats($prop, $value) {
    $this->$prop = $value;
  }
}

class Truck extends Car {
  var $wheels = 10;

  function showTruckStats() {
    $this->showStats();
    echo "wheels: " . $this->wheels . "<br>";
  }

}

$mack = new Truck();

$mack->showStats();

$mack->changeStats("fuel", "diesel");

$mack->showTruckStats();

?>

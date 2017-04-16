<?php

class Car {
  // Access anywhere
  public $fuel = "gas";
  // Access within class and subclass
  protected $engine = 3.2;
  // Access within class only
  private $doors = 2;

  function showStats() {
    echo "fuel: " . $this->fuel . "<br>";
    echo "engine: " . $this->engine . "<br>";
    echo "doors: " . $this->doors . "<br>";
  }

  function changeStats($prop, $value) {
    $this->$prop = $value;
  }
}

$bmw = new Car();

echo $bmw->fuel . "<br>";

$bmw->showStats();

?>

<?php
class Fruit {
  public $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$apple = new Fruit();
$apple->name = "Apple"; // Can be accessed directly
$apple->get_details();

class Fruit1 {
  private $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$apple = new Fruit1();
$apple->name = "Apple"; // Error: Cannot access private property
$apple->get_details();

class Fruit2 {
  protected $name;

  public function get_details() {
    echo "Name: " . $this->name . ".";
  }
}

$apple = new Fruit2();
$apple->name = "Apple"; // Error: Cannot access protected property
$apple->get_details();
?>
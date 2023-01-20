<?php

class Fruit
{

  public $name;
  public $color;


  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
   public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class apple extends Fruit {
  public function message() {
    echo "what am i?";
  }
}
class banana extends Fruit {
  public function message() {
    echo "banana class :D";
  }
}

$apple = new apple("apple", "Blue");
$apple->intro();

$banana = new banana("banana", "gray");
$banana->intro();



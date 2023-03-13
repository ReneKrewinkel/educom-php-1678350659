<?php


class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }
    protected function intro() {
        echo "The fruit is {$this->name} and the color is {$this->color}.<br>";
    }
}


// Strawberry is inherited from Fruit

class Strawberry extends Fruit {
    public function message() {
        echo "Am I a fruit or a berry?<br>";
    }
}

$strawberry = new Strawberry("strawberry", "red");
$strawberry -> message();
//$strawberry -> intro(); //Gives an error


class Strawberry2 extends Fruit {
    public $weight;
    public function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    public function intro() {
      echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
    }
  }
  
  $strawberry = new Strawberry2("Strawberry", "red", 50);
  $strawberry->intro();


echo "<br>";
echo "<br>";

final class Fruit2 {
    // some code
  }
  
  // will result in error
  class Strawberry3 extends Fruit2 {
    // some code
  }



?>
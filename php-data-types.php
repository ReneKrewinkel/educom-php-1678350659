 <?php
 $x = "Hello world!";
 $y = 'Hello world!';

 echo $x;
 echo "<br>";
 echo $y;
 ?>

<br>


<?php
$x = 5147483648;
var_dump($x*-100);

echo '<br>';

$y = 10.365;
var_dump($y);

echo '<br>';

$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

echo '<br>';

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
        $this->color = $color;
        $this->model = $model;
    }

    public function message () {
        return "My car is a " . $this->color . " " . $this->model . "!";

    }
}

$myCar = new Car( "Red", "Audi" );
echo $myCar -> message();
echo '<br>';
$myCar2 = new Car( "Green", "Volvo" );
echo $myCar2 -> message();


echo '<br>';

$x = "Hello world!";
$x = null;
var_dump($x);

echo '<br>';



?>


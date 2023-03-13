<?php

class Fruit {
    // Properties
    public $name;
    public $color;

    //Methods
    function set_name($name) {
        $this -> name = $name;
    }

    function get_name() {
        return $this -> name;
    }

    function set_color($color) {
        $this -> color = $color;
    }

    function get_color() {
        return $this -> color;
    }
}


$apple = new Fruit();
$banana = new Fruit ();
$apple -> set_name("Apple");
$apple -> set_color("Red");
$banana -> set_name("Banana");

echo "Name: " . $apple -> name;
echo "<br>";
echo "Color: " . $apple -> color;
echo "<br>";
echo $banana -> get_name();
echo "<br>";


// check if an object belongs to a specific class
var_dump($apple instanceof Fruit);






?>
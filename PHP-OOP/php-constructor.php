<?php

class Fruit {
    public $name;
    public $color;

    function __construct ($name, $color) {
        $this -> name = $name;
        $this -> color = $color;
    }


}

$apple = new Fruit("Apple", 'red');
echo $apple -> name;
echo "<br>";
echo $apple -> color;
echo "<br>";














?>
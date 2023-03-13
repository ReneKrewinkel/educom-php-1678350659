<?php

class pi {
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value;
    }
}

class x extends pi {
    public function xStatic() {
        return parent::$value;
    }
}
//Get value of static property directly via child class
echo x::$value;
echo "<br>";

// or get value of static property via xStatic() methods
$x = new x();
echo $x -> xStatic();
echo "<br>";


$pi = new pi();
echo $pi -> staticValue();
echo "<br>";
//Get static property
echo pi::$value;
echo "<br>";











?>
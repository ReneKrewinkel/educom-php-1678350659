<?php


// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
        $this->name = $name;
}

//abstract method without argument
abstract public  function intro() : string;



}


// Child classes
class Audi extends Car{
    public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car{
    public function intro() : string { 
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car{
    public function intro() : string {
        return "French extravagance! I'm a $this->name!";
    }
}


// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";
$citroen = new Citroen("Citroen");
echo $citroen->intro();
echo "<br>";
echo "<br>";
echo "<br>";



abstract class ParentClass{
//abstract method with argument
abstract protected function prefixName($name);
}

class ChildClass extends ParentClass{
    public function prefixName($name, $separator = ".", $greet = "Dear"){
        if ($name =="John Doe"){
        $prefix = "Mr";
    } elseif($name == "Jane Doe") {
        $prefix = "Mrs";
    } else {
        $prefix = "";
    }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new ChildClass;
echo $class -> prefixName("John Doe");
echo "<br>";
echo $class -> prefixName("Jane Doe");
echo "<br>";






?>
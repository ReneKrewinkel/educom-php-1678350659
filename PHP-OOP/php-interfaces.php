<?php


//interface definition
/*
interface Animal { 
    public function makeSound();
}
*/

//
class Cat /*implements Animal*/ {
    public function makeSound() {
        echo " Meow! ";
    }
}

class Dog /*implements Animal*/ {
    public function makeSound() {
        echo " Woof! ";
    }
}

class Mouse/* implements Animal*/ {
    public function makeSound() {
        echo " Squeak! ";
    }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

//Tell the animals to make a sound
foreach($animals as $animal) {
    $animal->makeSound();
    echo"<br>";
}

echo "<br>";
$dog -> makeSound();











?>
<?php

function my_callback($item) {
    return strlen($item);
}

$strings = ["apple", "orange", "banana", "watermelon"];
$lengths = array_map("my_callback", $strings);
print_r($lengths); 
echo "<br>";


// anonymous callback function
$lengths2 = array_map( function($item) { return strlen($item);} , 
$strings);
print_r($lengths2);
echo "<br>";


// Callbacks in user defined functions

function exclaim($str) {
    return $str . "! ";
}

function ask($str) {
    return $str . "? ";
}

function printFormatted($str, $format) {
    // Calling the $format callback function
    echo $format($str);
}

// pass "exlaim" and "ask" as callback functions to printFormatted()
printFormatted("Hello world", "exclaim");
echo "<br>";
printFormatted("Hello world", "ask");






?>
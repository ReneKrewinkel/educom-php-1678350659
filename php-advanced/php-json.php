

<?php

$age = array("Peter" =>35, "Ben" => 37, "Joe" =>43);
echo json_encode($age);
echo "<br>";


$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
echo "<br>";

$jsonobj = json_encode($age);
var_dump(json_decode($jsonobj));
echo "<br>";
echo "<br>";

//json_decode is used to decode a JSON object into a PHP object

var_dump(json_decode($jsonobj, true)); // function has a second parameter, and when set to true, JSON objects are decoded into associative arrays.
echo "<br>";

var_dump(json_decode($jsonobj, false));
echo "<br>";
echo "<br>";

//accessing decoded values from PHP object
$obj = json_decode($jsonobj);

echo$obj->Peter;
echo "<br>";
echo $obj -> Ben;
echo "<br>";
echo $obj -> Joe;
echo "<br>";

//accessing decoded values from PHP associative array
$arr = json_decode($jsonobj, true);

echo $arr["Peter"];
echo "<br>";
echo $arr["Ben"];
echo "<br>";
echo $arr["Joe"];
echo "<br>";


// Looping through the the values of PHP object
foreach ($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";
}

echo "<br>";

// Looping through the the values of PHP associative array
foreach($arr as $key => $value) {
    echo $key . " => " . $value . "<br>";
  }


?>
<?php


// While loop
$x = 1;

while ($x <= 5) {
    echo "the number is: $x <br>";
    $x ++;
}

$x = 1;

while ($x <= 100) {
    echo "the number is: $x <br>";
    $x+=10;
}

// Do While loop
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
}

while ($x <= 5);


$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


//For loop
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}

for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  } 


//For each loop

$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value) {
    echo $value . "<br>";
}

$age = array ("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $value) {
    echo "$x = $value <br>";
}


//Break and continue

for ($x = 0; $x < 10; $x++) {
    if($x == 4) {
        break;
    }
    echo "The number is: $x <br>";
}


for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }

  $x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 


$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
} 

?>
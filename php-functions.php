<?php 

function writeHW() {
    echo "Hello world! <br>";
}

writeHW();

function writeMsg($txt) {
    echo "$txt <br>";
}

writeMsg('test');


function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");


  function familyName2($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName2("Hege", "1975");
  familyName2("Stale", "1978");
  familyName2("Kai Jim", "1983");


  function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, 5); 


  function setHeight (int $minheight = 50) {
    echo "The height is : $minheight <br>";
  }

  setHeight(350);
  setHeight();
  setHeight(135);

  function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5, 10) . "<br>";
  echo "7 + 13 = " . sum(7, 13) . "<br>";
  echo "2 + 4 = " . sum(2, 4) . "<br>";



  function addNumbers2(float $a, float $b) : int {
    return $a + $b;
  }
  echo addNumbers2(1.2, 5.2) . "<br>"; 

  
  function add_five(&$z) {
    $z += 5;
  }

  $num = 2;
  add_five($num);
  echo $num;


?>
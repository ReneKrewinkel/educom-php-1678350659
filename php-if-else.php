<?php

$t = date ('H');

if ($t < '20') {
    echo 'have a good day sir!';
}

echo '<br>';

if ($t < '20') {
echo 'Have a good day!';
} else {
    echo 'Have a good night!';
}

echo '<br>';

if ($t < "10") {
    echo "Have a good morning!";
  } elseif ($t < "20") {
    echo "Have a good day!";
  } else {
    echo "Have a good night!";
  }

?>
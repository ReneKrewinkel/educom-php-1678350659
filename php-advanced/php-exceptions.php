<?php
// throwing an exception
// uncaught exception
    function divide($dividend, $divisor) {
        if($divisor == 0) {
            throw new Exception ("Division by zero");
        }
        return $dividend / $divisor;
    }
    echo "<br>";
    echo "<br>";
    //echo divide(5,0);

    // use try... catch Statement to avoid  uncaught exception fatal error

try { echo divide (5,0);
} catch(Exception $e) {
    echo"Unable to divide by zero.";
}
echo "<br>";
echo "<br>";

// Try.. catch ... finally statement; if finally is present, the catch block is optional

try {
    echo divide (5,0);
} catch(Exception $e) {
    echo"Unable to divide by zero. <br>";
} finally {
    echo "Process complete.";
}

echo "<br>";
echo "<br>";

// Output a string even if an exception was not caught:
try {
    echo divide(5, 2) . "<br>";
  } finally {
    echo "Process complete.";
  }

  echo "<br>";
echo "<br>";

  // Exception object contains information about the error

  try {
    echo divide(5, 0);
  } catch(Exception $ex) {
    $code = $ex->getCode();
    $message = $ex->getMessage();
    $file = $ex->getFile();
    $line = $ex->getLine();
    echo "Exception thrown in $file on line $line: [Code $code]
    $message";
  }












?>
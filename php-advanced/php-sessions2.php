<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";

//To change a session variable, just overwrite it
$_SESSION["favcolor"] = "blue";
print_r($_SESSION);
echo "<br>";

//remove all session variables
session_unset();
print_r($_SESSION);
echo "<br>";

// destroy the session
session_destroy();
print_r($_SESSION);
?>

<h1> heading one</h1>

</body>
</html>
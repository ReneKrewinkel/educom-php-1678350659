<?php

// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en">
    <body>
        <?php
        // Set session variables
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "dog";
        echo "Session variables are set.";
        ?>
        <h1>heading 1 </h1>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
        $txt = "Hello World!";
        $x = 5;
        $y = 10.5;
        ?>
        <br>

        <?php
        $txt = "W3Schools.com";
        echo "I love $txt!";
        ?>
        <br>

        <?php
        $txt = "W3Schools.com";
        echo "I love " . $txt . "!";
        ?>
        <br>

        <?php
        $x = 5;
        $y = 4;
        echo $x + $y;
        ?>

        <?php
        $x = 5; // global scope

        function myTest() {
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p?>";

        }
        myTest();

        echo "<p> Variable x outside function is $x</p>";
        ?>


    <?php
    $x = 5;
    $y = 10;

    function myTest2() {
        global $x, $y;
        $y = $x + $y;
    }

    myTest2();
    echo $y; // ouputs 15
    ?>

    <br>
        
    <?php
    $x = 5;
    $y = 10;

    function myTest3() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    myTest3();
    echo $y; //outputs 15
    ?>
    
    <br>

    <?php
        function myTest4() {
            static $x = 0;
            echo $x;
            $x++;
        }

        myTest4();
        myTest4();
        myTest4();

    ?>
    </body>
</html>
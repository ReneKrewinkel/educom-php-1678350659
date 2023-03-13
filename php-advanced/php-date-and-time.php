<html>
    <body>

        <?php
            echo "Today is " . date("Y/m/d") . "<br>";
            echo "Today is " . date("Y.m.d") . "<br>";
            echo "Today is " . date("Y-m-d")  . "<br>";
            echo "Today is " . date("1") . "<br>";





        ?>

        <br>
        &copy; 2010-<?php echo date("Y");?> 
        <br><br>

        <?php 
            echo "the time is " . date("h:i:sa");
        ?>
        <br><br>

        <?php
            date_default_timezone_set("America/Los_Angeles");
            echo "The time is " . date("h:i:sa");
        ?>
        <br><br>

        <?php
            $d = mktime (11, 14, 54, 8, 12, 2014);
            echo "Created date is " . date("Y-m-d h:i:sa", $d);
        ?>
        <br><br>

        <?php
            $d=strtotime("10:30pm April 15 2014");
            echo "Created date is " . date("Y-m-d h:i:sa", $d);
            echo $d;
        ?>
        <br><br>

        <?php
            $d=strtotime("tomorrow");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("next month");
            echo date("Y-m-d h:i:sa", $d) . "<br>";

            $d=strtotime("+3 Months");
            echo date("Y-m-d h:i:sa", $d) . "<br>";
        ?>
        <br><br>

        <?php
            $startdate = strtotime("Saturday");
            $enddate = strtotime("+6 weeks", $startdate);
            
            while ($startdate < $enddate) {
                echo date("M d", $startdate) . "<br>";
                $startdate = strtotime ("+1 week", $startdate);
            }
            ?>
            <br><br>


            <?php
                $d1 = strtotime ("July 04");
                $d2 = ceil(($d1-time())/60/60/24);
                echo "There are " . $d2 . "days until 4th of July.";
            ?>
            

    </body>
</html>
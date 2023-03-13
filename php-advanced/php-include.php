<html>
    <body>
        <div class="menu">
            <?php include 'menu.php';?>
        </div> 
    
    
        <h1>Welcome to my home page!</h1>
        <?php include 'vars.php';
        echo "I have a $color $car.";
        ?> 
        <br><br>

        <?php include 'noFileExists.php';
        echo "I have a $color $car.";
        ?>
        <br><br>

        <?php require 'noFileExists.php';
        echo "I have a $color $car.";
        ?>
        
        
        
        <p> Some text. </p>
        <p> Some more text. </p>
        <?php include 'footer.php';?>

    </body>
</html>
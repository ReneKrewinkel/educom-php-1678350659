<html>
    <body>

    <?php
    // define variables and set to empty values
    $name = $email = $gender = $comment = $website = "";
    $nameErr= $emailErr = $genderErr = $websiteErr = "";

    if ($_SERVER["REQUEST_METHOD"] =="POST") {
        if (empty($_POST["name"])){
            $nameErr = "Name is required";
        } else {
            $name = test_input ($_POST["name"]);
        }
    
        if (empty($_POST["email"])){
            $emailErr = "Email is required";
        } else{
            $email = test_input ($_POST["email"]);
        }

        if (empty($_POST["website"])){
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }
    
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input ($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input ($_POST["gender"]);
        }
    
    }



    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input ($_POST["name"]);
    $email = test_input ($_POST["email"]);
    $website = test_input ($_POST["website"]);
    $comment = test_input($_POST["comment"]);
    $gender = test_input ($_POST["gender"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

        <h2> PHP Form Validation Example </h2>
        <p> <span class="error" style = "color: red">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

        Name: <input type="text" name="name">
        <span class = "error" style = "color: red">* <?php echo $nameErr;?> </span>
        <br><br>

        E-mail: <input type="text" name="email">
        <span class = "error" style = "color: red">*<?php echo $nameErr;?> </span>
        <br><br>

        Website: <input type="text" name="website">
        <span class = "error" > <?php echo $websiteErr;?> </span>
        <br><br>

        Comment: <textarea name = "comment" rows="5" cols="4"></textarea><br>
        <br><br>

        
        Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class = "error" style = "color: red">*<?php echo $genderErr;?> </span>
            <br><br>
            <input type="submit" name="submit" value="submit">

    <?php
    echo "<h2> Your Input:</h2>";
    echo $name . "<br>";
    echo $email . "<br>";
    echo $website . "<br>";
    echo $comment . "<br>";
    echo $gender . "<br>";    
    ?>




    </body>
</html>

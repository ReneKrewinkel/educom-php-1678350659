<?php

$servername = "localhost";
$username = "root";
$password = "Edu-Com17";
$dbname = "myDBPDO";


try {
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $stmt -> bindParam(':firstname', $firstname);
    $stmt -> bindParam(':lastname', $lastname);
    $stmt -> bindParam(':email', $email);

    //insert a row
    $firstname = "John";	
    $lastname = "Doe";
    $email = "johndoe@gmail.com";
    $stmt->execute();

    //insert another row

    $firstname = "Mary";
    $lastname = "Smith";
    $email = "marysmith@gmail.com";
    $stmt->execute();

    // insert a third row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "juledooley@gmail.com";
    $stmt->execute();

    echo"New records created successfully";
}   catch(PDOException $e) {
    echo"Error" . $e->getMessage();
}

$conn = null;


?>
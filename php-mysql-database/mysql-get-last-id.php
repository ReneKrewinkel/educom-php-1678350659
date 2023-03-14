<?php

$servername = "localhost";
$username = "root";
$password = "Edu-Com17";
$dbname = "myDBPDO";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO MyGuests (firstname, lastname, email) 
    VALUES ('John', 'Doe', 'johndoe@example.com')";
    // use exec() because no results are returned
    $conn -> exec($sql);
    $last_id = $conn -> LastInsertID();
    echo "New record created successfully. Last inserted ID is: ". $last_id;
}   catch (PDOException $e) {
    echo $sql . "<br>". $e->getMessage();
}

$conn = null;























?>
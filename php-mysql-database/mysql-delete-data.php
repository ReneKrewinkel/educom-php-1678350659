<?php

$servername = "localhost";
$username = "root";
$password = "Edu-Com17";
$dbname = "myDBPDO";

try{
    $conn = new PDO ("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn -> setAttribute ( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=12";

    // use exec() because no results are returned
    $conn->exec($sql);
    echo"Record deleted successfully\n";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;










?>
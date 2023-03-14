<?php
$servername = "localhost";
$username = "root";
$password = "Edu-Com17";

try {
    $conn = new PDO ("mysql:host=$servername;dbname=myDBPDO", $username, $password);
    // set the PDO error mode to exception
$conn -> setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e -> getMessage();
}



// connection will be closed automatically when the scripts ends, but to close the connection before use:
    $conn = null;
?>










<?php
$host = "localhost";
$username = "dhg17";
$password = "mysql2018";
$db = "dhg17";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Kontakt till DB misslyckades: " . $e->getMessage();
    }
?>
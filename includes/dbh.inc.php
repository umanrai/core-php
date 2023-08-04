<?php

$serverName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "learning_db";

try {
    $pdoConnection = new PDO("mysql:host=$serverName;dbname=$dbName", $dbUser, $dbPassword);
    // set the PDO error mode to exception
    $pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Connection Failed" . $e->getMessage();
}
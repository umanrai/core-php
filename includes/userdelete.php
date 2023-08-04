<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";

        // None name parameter
        /* $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
         $stmt = $pdoConnection->prepare($query);
         $stmt->execute([$username, $pwd, $email]);
         $pdoConnection = null;
         $stmt = null;*/

        // Name parameter
        $query = "DELETE FROM users WHERE username = :username AND pwd = :pwd;";
        $stmt = $pdoConnection->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->execute();
        $pdoConnection = null;
        $stmt = null;

        header("location: ../index.php");
        die();

    } catch (PDOException $e) {
        die( "Query Failed" . $e->getMessage() );
    }

} else {
    header("location: ../index.php");
}
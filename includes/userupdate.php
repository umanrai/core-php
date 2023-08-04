<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];
var_dump($username);
    try {
        require_once "dbh.inc.php";

        // Name parameter
        var_dump($username);
        $query = "UPDATE users SET username = :username, pwd = :pwd, email = :email WHERE id = 7;";
        $stmt = $pdoConnection->prepare($query);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $pwd);
        $stmt->bindParam(":email", $email);
        $stmt->execute();
        $pdoConnection = null;
        $stmt = null;

        header("location: .../index.php");
        die();

    } catch (PDOException $e) {
        die( "Query Failed" . $e->getMessage() );
    }

} else {
    header("location: ../index.php");
}
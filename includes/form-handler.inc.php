<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once "dbh.inc.php";

        // None name parameter
       /* $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";
        $stmt = $pdoConnection->prepare($query);
        $stmt->execute([$username, $pwd, $email]);
        $pdoConnection = null;
        $stmt = null;*/

        // Name parameter
        $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
        $stmt = $pdoConnection->prepare($query);


        $options = [
            'cost' => 5
        ];

        $hashedPwd = password_hash( $pwd, PASSWORD_BCRYPT, $options ); // PASSWORD_BCRYPT is hashing algorithm.

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->bindParam(":email", $email);
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
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usersearch = $_POST["usersearch"];

    try {
        require_once "includes/dbh.inc.php";
        // Name parameter
        $query = "SELECT * FROM comments WHERE username = :usersearch;";
        $query2 = "SELECT * FROM comments WHERE username LIKE :usersearch";
        $stmt = $pdoConnection->prepare($query);
        $stmt->bindValue(':usersearch', "$usersearch", PDO::PARAM_STR);
//        $stmt->bindValue(':usersearch', "%$usersearch%", PDO::PARAM_STR);

        $stmt->execute();
        $results = $stmt->fetchAll(pdo::FETCH_ASSOC);
        $pdoConnection = null;
        $stmt = null;

    } catch (PDOException $e) {
        die( "Query Failed" . $e->getMessage() );
    }

} else {
    header("location: ../index.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">

    <title>Document</title>
</head>
<body>

<h3>Search results:</h3>
<?php
    if (empty($results)) {
        echo "<div>";
        echo " <p>There were no results!</p> ";
        echo "</div>";
    }
    else {
        foreach ($results as $row) {
            echo "<div>";
            echo "<h4>" . htmlspecialchars($row["username"]) . "</h4>"; // htmlspecialchars prevent Cross-Site Scripting (XSS) attacks.
            echo "<p>" .htmlspecialchars($row["comment_text"]) . "</p>";
            echo "<p>" .htmlspecialchars($row["created_at"]) . "</p>";
            echo "</div>";
        }
    }
?>


</body>

</html>

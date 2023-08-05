<?php

    session_start();
    $_SESSION["username"] = "Uman";
    $_SESSION["email"] = "mail@gmail.com";
    //unset($_SESSION["username"]); // Deleting only one session data
    // session_unset(); // Deleting all the session data

    session_destroy(); // Stopping the session from running

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">

    <title>Documents</title>
</head>
<body>

<?php

echo $_SESSION["username"];
echo $_SESSION["email"];


?>
</body>

</html>

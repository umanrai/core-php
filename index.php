<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Array</title>
</head>
<body>

<?php

    $fruits = array("apple", "mango", "graph", "strawberry");
    echo $fruits[2]; // it will display array value number 2 is graph.
    $fruits[] = "orange"; // it will put orange in last of arrays.
    echo "<br/>";
    echo $fruits[4] . "<br />";

    // Associative array
    $tasks = [
            "laundry" => "Daniel",
            "dishes" => "Sita",
            "cooking" => "Gita",
            "trash" => "Frida",
    ];

    echo $tasks["laundry"] . "<br />";
    print_r($tasks); // it's a built-in function that's display $tasks.


?>

</body>

</html>

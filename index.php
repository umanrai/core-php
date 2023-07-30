<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>

    <title>Condition && Control</title>
</head>
<body>


<?php
$bool = true;
$a = 2;
$b = 4;
$c = "God";

// if else condition
if ($a < $b && !$bool){
    echo "First condition is true!";
} elseif ($a < $b && $bool){
    echo "Second condition is true!" . "<br/>";
} else {
    echo "None of the condition were true!";
}

// Switch condition

switch ($b) {
    case 1:
        echo "The first case is correct!";
        break;
    case 2:
        echo "The second case is correct!";
        break;
    case 3:
        echo "The third case is correct!";
        break;
    default: echo "None of the above cases is correct!" . "<br>";
}
switch ($c) {
    case 1:
        echo "God is not here!";
        break;
    case 2:
        echo "God is't here!";
        break;
    case "God":
        echo "God is here!" . "<br>";
        break;
    default: echo "None of the above cases is correct!";
}

// Match condition

$result = match ($b){
    1, 2, 4 => "variable b is equal to four!",
    3 => "variable is b is equal to three!",
    default => "None were a match!",
};
echo $result;

?>

</body>

</html>

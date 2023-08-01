<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Loops</title>
</head>
<body>

<?php
    // For loop
    /*for ($i = 1; $i <=5; $i++)
    {
        echo "This is iteration number " . "$i" . "<br />";
    }

    $test1 = 2;
    $test2 = 6;
    for ($i = $test1; $i <= $test2; $i++)
    {
        echo "This iteration number is " . "$i" . "<br />";
    }*/


    // While loop
    /*$test = 5;
    while ($test < 10)
    {
        echo $test . "<br />";
        $test++;
    }*/

    // Do-While loop - no matter what it will always loop it out once
    /*$test = 11;
    do {
        echo $test . "<br />";
        $test++;
    } while ($test < 10);*/

    // foreach loop
    /*$fruits = array("Apple", "Banana", "Orange");
    foreach ($fruits as $fruit)
    {
        echo "This is a " . $fruit . "<br />";
    }*/

    $fruits = [ "Apple" => "Red", "Banana" => "Yellow", "Orange" => "Orange" ];
    foreach ($fruits as $fruit => $color)
    {
        echo "This is a " . $fruit . "," . "that has a color of " ."$color" . "<br />";
    }

?>
</body>

</html>

<?php

declare(strict_types=1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Document</title>
</head>
<body>

<?php

    // user define function
   /* function sayHello()
    {
        return "Hello world!";
    }

    $test = sayHello();
    echo $test . "<br />";*/

    function sayHi(string $name) // $name = variable placeholder name // string is for passing name should be in string.
    {
        return "Hi " . $name. "!";
    }
    $test1 = sayHi("Uman"); // passing string=("Uman) to variable placeholder name=(#name)
    echo $test1 . "<br />";
    /*In this example, the function is named sayHi, and it takes a single parameter $name, which is expected to be of type string.
    This means that the function will only accept a string as an argument for the $name parameter, and
    it will throw a type error if you try to pass any other data type.*/

    function calculator(int $num1, int $num2)
    {
        $results = $num1 + $num2;
        return $results;
    }
    $cal = calculator(2,3);
    echo $cal;

?>

</body>

</html>

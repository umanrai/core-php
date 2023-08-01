<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Constants</title>
</head>
<body>

<?php
    // Constants mean constant, it won't change.
    // Variable name always should be capital.
    define("PI", 3.14);
    define ("IS_Uman", "RAM");
    echo PI . "<br />";

    define("NAME", "uman");
    echo NAME . "<br />";

    function test()
    {
        echo IS_Uman;
    }
    test();

?>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Condition</title>
</head>
<body>

<?php

    $currentYear = date('Y');

    if ($currentYear == 2023) {
      echo "Current Year ";
    } else {
      echo 'NO year';
    }

    echo nl2br("\n");

    echo $currentYear == 2023 ? 'Current Year' : 'No Year';
    echo nl2br("\n");

    if ($currentYear == 2023) :
      echo "Current Year ";
    else :
      echo 'NO year';
    endif;

    echo nl2br("\n");

    $uyman = 'NoYear';

    if ($currentYear == 2023) {
      $uyman = "Current Year ";
    }

    echo $uyman;

?>

</body>

</html>

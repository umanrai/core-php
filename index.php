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

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input class="size" type="number" name="num01" placeholder="Number one"><br>
    <select class="size" id="dropdown" name="operator">
        <option value="add">+(Addition)</option>
        <option value="subtract">-(Subtraction)</option>
        <option value="multiply">*(Multiplication)</option>
        <option value="divide">/(Division)</option>
    </select><br>
    <input class="size"  type="number" name="num02" placeholder="Number two"><br>
    <button class="size">Calculate</button>
</form>

<div class="container">
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        /*$num01 = $_POST["num01"];
        $num02 = $_POST["num02"];*/

        // Sanitizing Or stopping users for providing wrong data
        // Grab data from inputs

        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // Error handlers : it prevents users, from submitting empty inputs
        $errors = false;
        // it is checking whether inputs are empty or not
        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='calc-error'>Fill in all fields!</p>";
            $errors = true;
        }

        // it is checking whether inputs are numbers or not
        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'>Only write numbers!</p>";
            $errors = true;
        }


        // calculate the numbers if no errors
        if (!$errors){
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'>Something went wrong!</p>";
            }

            echo "<p class='calc-result'>Result = " . $value ."</p>";
        }
    }
    ?>
</div>



</body>

</html>

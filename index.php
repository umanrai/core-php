<?php

// String Operator

// Php is a dynamic type language.

$uman = "Uman Rai"; // string

$uman = 1; // Integer

$uman = 1; // Decimal/Float

$rai = '2'; // Integer

echo $uman + $rai;

echo "<br />";

// Arithmetic Operators
echo (1 * 2) + (2 * 2); // [BADMAS]

echo "<br />";

$rai = $rai + 5;

echo $rai += $rai; // $rai = ($rai + $rai)

echo "<br />";

$a = 1;

//echo $a++; // Post-increment operator

echo ++$a; // Pre-increment operator

echo "<br />";
// Comparison operator

$x = 10;

$y = '10';

if ($x === $y) { // Type coercion, strict type
    echo 'Equal';
} else {
    echo 'Not Equal';
}

if ($x != $y) {
    echo "X is not equals to Y";
}

//

echo "<br />";

// And Operator Syntax (&&, and)

$c = 12;

$d = 25;

if ($c > 10 && $d > 20) {
    echo "Yes thet are greater";
}
echo "<br />";
// Or Operator syntax (||, or)

if ($c > 10 || $d > 20) {
    echo "Yes thet are greater";
}
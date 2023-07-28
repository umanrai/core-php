<?php

/*
 * What is array and objects
 */

$args = []; // Short syntax array

$args2 = array();

$args = ["dsdas", "asdasda"];

$dynamicItem = 'Uman';

$args[] = $dynamicItem;
$args[] = 'Sachin';
$args[] = 'kin';
echo "<br/>";

// Args is a single dimensional array
$sd = [ 'uman0', 'Uman1', 'Uman2', 'Uman3' , 'UManrai']; // 4

//echo $sd[0];
//echo $sd[1];
//echo $sd[2];
//echo $sd[3];
//echo $sd[4];

echo "<br />";
foreach($sd as $sds) {
    echo $sds . "<br />";
}


echo "<br />";

// Multi dimensional array
$md = [
    [
        'name' => 'Uman',
        'value' => 'value1',
        'age'  => 20,
        'caste' => 'rai1'
    ],

    [
        'name' => 'Sachin',
        'value' => 'value1',
        'age' => 23,
        'caste' => 'rai'
    ],
];

//echo $md[0]['caste'];

foreach ($md as $mds) {
    echo $mds['name'] . $mds['caste'] . $mds['age']. "<br>";
}
echo "<br />";
foreach ($md as $mds) {
    foreach ($mds as $key => $value) {
        echo $key . ' = ' . $value . "<br>";
    }
}


//// Creating a multi dimensional array
//$multiargs = [];
//
//foreach ($args as $index => $arg) {
//    $multiargs[] = [
//        'value' => $arg,
//        'index' => $index
//    ];
//}
//echo "<br/>";
//
//echo "<pre>";
//var_dump($multiargs);
//echo "</pre>";
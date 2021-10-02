
<?php

$output = 'Hello World';


// Single line comment

# Single line comment

/*

    Multiline comments

*/


// Data types

/*
    Integers
    floats
    strings
    booleans
    arrays
    objects
    NULL
    Resource    
*/

$output = 'Hello World';

$yeah = 'Yeah';

echo $output .' '. $yeah.'!';

echo "$output $yeah";


//espaping caracter

$string3 = 'They\'re Here';
echo $string3;

// Integers
$num1 = 3;

// floats
$float1 = 3.4;


$bool1 = true;
$sum = $num1 + $float1;
echo $sum;


define('GREETING', 'Hello everyone');

echo GREETING;


?>

<h1><?php echo $bool1 ?></h1>

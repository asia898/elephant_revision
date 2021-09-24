<?php

function echoWithBreak($arg = NULL){
    echo $arg . '<br>';
}

# substr()
# Returs a postion of a string.

$output = substr('Hello', 0, 4);
$output= substr('Hello', -2);

echoWithBreak($output);

# strlen()
# Returns the length of a string

$output = strlen('Hello World');
echoWithBreak($output);

# strpos()
# Finds the position of the first occurance of a sub string

$output = strpos('Hello World', 'o');
echoWithBreak($output);


# strrpos()
# Finds the position of the filastrst occurance of a sub string

$output = strrpos('Hello World', 'o');
echoWithBreak($output);

# trim()
# Strips whitespace but does not modify the string.

$text = 'Hello World                                       ';
var_dump($text);
echoWithBreak();
var_dump(trim($text));
echoWithBreak();

# strtoupper
# Makes everything uppercase

$output = strtoupper('Hello World');
echoWithBreak($output);

# strtolower
# Makes everything lowercase

$output = strtolower('Hello World');
echoWithBreak($output);

# ucwords
# Capitalize Every World

$output = ucwords('hello world');
echoWithBreak($output);


# str_replace()
# Replace all occurances of a search string with a replacement.

$text = 'Hello World';
$output = str_replace('World', 'Asia', $text);
echoWithBreak($output);

# is_string()
# Check if string

$val = '22';
$output = is_string($val);
echoWithBreak($output);

$values= array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');


foreach($values as $value) {
    if(is_string($value)){
        echoWithBreak("{$value} is a string");
    } else {
        $type = gettype($value);
        echoWithBreak("{$value} is a {$type}");
    }
}

# gzcompress()
# compress a string

$string = "What is lorem ipsum lorem ipsum is simply dummy text of the printing and typesetting industry lorem ipsum has been the industry's standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has?
Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.";

$compressed = gzcompress($string);

echoWithBreak($compressed);

$original = gzuncompress($compressed);

echoWithBreak($original);










?>

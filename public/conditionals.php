<?php
    /*
        == - equals
        === - identical the date type
        <
        >
        <=
        >=
        !=
        !==
    
    */

    $num = 6;

    // Value is tested not the type


    if($num === 5){
        echo '5 passed';
    } elseif($num === 6) {
        echo '6 passed';
    } else {
        echo 'Did not passed';
    }

    // Nested if statements

    $num = 8;

    if($num > 4){
        if($num < 10){
            echo "<br> $num passed";
        }
    }

    // More than one conditional 

    // and &&
    // or ||
    // xor


    if($num > 4 || $num <10){
        echo "<br> $num passed";
    }

    // xor true if a or b is true but not both

    if($num > 4 XOR $num <10){
        echo "<br> xor $num passed";
    }

    // SWITCHES

    // test for value for different cases. 

    $favColor = 'green';
    echo '<br>';

    switch($favColor){
        case 'red':
            echo 'Your favourite color is red';
            break;
        case 'blue':
            echo 'Your favourite color is blue';
            break;
        case 'yellow':
            echo 'Your favourite color is yellow';
            break;
        default:
            echo "Your favourite color is $favColor";
    }
?>
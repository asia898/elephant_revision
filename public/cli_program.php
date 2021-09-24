<?php

    /*
    * @argc integer variable containing the argument count (I guess number of arguments)
    * @argv array variable containing each argument's value 
    */

    if($argc !== 2){
        echo "Usage: php cli_program.php" . PHP_EOL;

        // lets the shell know that the command failed. 
        exit(1);
    }

    $name = $argv[1];

    echo "Hello, $name" . PHP_EOL;


?>
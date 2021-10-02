<?php 

    #FUNCTIONS - Block of code that can be repeatedly called

    /*
        Camel Case- myFunction()
        Lower Case- my_function()
        Pascal Case - MyFunction() - classes

        parameters = args
    
    */

    function simpleFunction(){
        echo 'Hello World<br>';
    }

    simpleFunction();

    // Function with Param
    function sayHello($name = 'World'){
        echo "Hello $name<br>";
    }

   // sayHello('Joey');
    //sayHello();

    // Functions normally returns sth

    function addNumbers($num1, $num2) {
        return $num1 + $num2;
    }

    //echo addNumbers(1, 5);


    // passing arguments by reference

    $myNum = 10;

    function addFive($num){
        $num += 5;
    }

    function addTen(&$num){
        $num += 10;
    }
    
    echo "Value: $myNum<br>";
    echo addFive($myNum);
    
    addTen($myNum);

    echo "Value: $myNum<br>";

?>
<?php
    # LOOPS - Execute code set number of time

    /*
        For
        While
        Do... While
        Foreach
    
    */

     #for Loop
     # @params - init, condition, inc


     for($i = 0; $i < 10; $i++){
        echo 'Number '.$i;
        echo '<br>';
     }


     #while loop
     #@params - condition

     $i = 0;

     while($i < 10){
        echo $i;
        echo '<br>';
        $i++;
     }


     #Do while
     # @params - condition
     #runs at least once

     $i = 0;

     do{
         echo $i;
         echo '<br>';
         $i++;
     }

     while ($i < 10);

     #Foreach
     #need an array

     $people = array('Brad', 'Jose', 'William');
     $assocArray = array();

     foreach($people as $person){
        echo $person;
        echo '<br>';
        $assocArray[$person] = "$person@mail.com" ;
     }

     #foreach associative array

     foreach($assocArray as $person => $email){
         echo $person.': '.$email;
         echo '<br>';
     }


     

?>
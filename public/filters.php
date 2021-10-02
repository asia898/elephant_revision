<?php 
    // Check for posted data
    #filter_has_var — Checks if variable of specified type exists 
    // Type: Una de estas posibilidades: INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER o INPUT_ENV. 

    // if(filter_has_var(INPUT_POST, 'data')){
    //     echo 'Data Found';
    // }else {
    //     echo 'No data';
    // }

    // if(filter_has_var(INPUT_POST, 'data')){
    //     $email = $_POST['data'];

    //     // Remove invalid values

    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    //     echo $email.'<br>';

    //     if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //         echo 'Email is Valid';
    //     } else {
    //         echo 'Email is not valid';
    //     }
    // }

    //Validations
    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    //Sanitize

    # FILTER_SANITAZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    //$var = '23';

    // Even if the 23 is a string it will be a number

    // if(filter_var($var, FILTER_VALIDATE_INT)){
    //     echo $var . ' is a number';
    // } else {
    //     echo $var . ' is not a number';
    // }

    // $var = '32323ghghg23hg32h3gh2hg3g2h4h5g';

    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    //string(15) "323232332323245" 

    /*$var = '<script>alert(1)</script>';
    var_dump(filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS));*/

    /*$filters = array(
        "data" => FILTER_VALIDATE_EMAIL,
        "data2" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 100
            )
        )
    );

    print_r(filter_input_array(INPUT_POST, $filters));*/

    $arr = array(
        "name" => "asia kwiatkowska",
        "age" => "32",
        "email" => "joanna@gmail.com"
    );

    $filters = array(
        "name" => array(
            "filter" => FILTER_CALLBACK,
            "options" => "ucwords"
        ),
        "age" => array(
            "filter" => FILTER_VALIDATE_INT,
            "options" => array(
                "min_range" => 1,
                "max_range" => 120
            )
        ),
        "email" => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arr, $filters));
    

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>
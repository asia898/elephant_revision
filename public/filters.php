<?php 
    // Check for posted data
    #filter_has_var — Checks if variable of specified type exists 
    // Type: Una de estas posibilidades: INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER o INPUT_ENV. 

    if(filter_has_var(INPUT_POST, 'data')){
        echo 'Data Found';
    }else {
        echo 'No data';
    }

?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <button type="submit">Submit</button>
</form>
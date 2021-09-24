<?php 
    
    if(isset($_GET['name'])){
        //print_r($_GET);
        $name = htmlentities($_GET['name']);
    }
    

    /*
    if(isset($_POST['name'])){
        //print_r($_GET);
        
        $name = htmlentities($_POST['name']);
        echo $name;

    }
    */

    /*
    if(isset($_REQUEST['name'])){
        //print_r($_GET);
        
        $name = htmlentities($_REQUEST['name']);
        echo $name;

        // Works weather it is a post or get

    }
    */

    //echo $_SERVER['QUERY_STRING'];
    // Required method = GET

    // PHP Warning:  Undefined array key "name" in /home/asia/php/public/get_post.php on line 2
    # Cross site scripting attacks X-XSS attack. Hacker will try to insert a script to mess sth up. 
    # USe htmlentities to prevent it. 

    #GET: ?name=<script>alert(1)<%2Fscript>&email=
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <!-- <form method="GET" action="get_post.php"> -->
    <form method="GET" action="get_post.php">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <input type="submit" value="Submit">
    </form>

    <ul>
        <li>
            <a href="get_post.php?name=Brad">Brad</a>
        </li>
        <li>
            <a href="get_post.php?name=Steve">Steve</a>
        </li>
    </ul>

    <h1><?php echo "{$name}'s Profile"; ?></h1>

</body>
</html>


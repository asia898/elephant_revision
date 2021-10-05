<?php 

    // Message Vars
    $msg = '';
    $msgClass= '';
    // Check for submit

    if(filter_has_var(INPUT_POST, 'submit')){
        // Get the form data

        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Check required Fields

        if(!empty($email) && !empty($name) && !empty($message)){
            echo "Passed";
        } else {
            $msg = "Please fill in all fields";
            $msgClass = "alert-danger";

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">My Website</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <?php if($msg != ''): ?>
            <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
        <?php endif ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="">Message</label>
                <textarea type="text" name="message" class="form-control"></textarea>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
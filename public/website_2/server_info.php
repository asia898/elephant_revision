<?php
    # $_SERVER SUPERGLOBAL

    /*
        Superglobals: 
        Build in variables that are always available in all scopes. 

        $GLOBALS
        $_SERVER
        $_GET
        $_POST
        $_FILES
        $_COOKIE
        $_SESSION
        $_REQUEST
        $_ENV
    */

    // Create Server Array

    $server = [
        'Host Server Name' => $_SERVER['SERVER_NAME'],
        'Host Header' => $_SERVER['HTTP_HOST'],
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Document Root' => $_SERVER['DOCUMENT_ROOT'],
        'Current Page' => $_SERVER['PHP_SELF'],
        'Script Name' => $_SERVER['SCRIPT_NAME'],
        'Absolute Path' => $_SERVER['SCRIPT_FILENAME']
    ];




    // Create CLient Array

    $client = [
        'Client System Info' => $_SERVER['HTTP_USER_AGENT'], // The browser
        'Client IP' => $_SERVER['REMOTE_ADDR'], //User's IP Address
        'Remote Port' => $_SERVER['REMOTE_PORT']

    ];



?>
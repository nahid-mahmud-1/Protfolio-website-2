<?php

    // Database Connection
    $db_hostname    = "localhost";
    $db_username    = "root";
    $db_password    = "";
    $database_name  = "portfolio-website-2";

    $db = mysqli_connect($db_hostname, $db_username, $db_password, $database_name);

    if( $db ){
        // echo "Database is connected";
    }
    else{
        die('Database Connecting Error' . mysqli_error(mysqli_connect($db_name, $db_username, $db_password, $database_name)));
    }
?>

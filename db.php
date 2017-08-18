<?php

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
    if(!$conn)
    {
        die('Could not connect: ' . mysqli_error($conn));
    }
    echo 'Connected successfully';
    mysqli_select_db($conn,'crud');
    mysqli_close($conn);


?>
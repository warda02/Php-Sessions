<?php
    $url = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'session';

    // Create connection
    $conn = mysqli_connect($url, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die('Could not connect to MySQL: ' . mysqli_connect_error());
    }
?>

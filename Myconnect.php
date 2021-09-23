<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "jobportal";
    $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
    if($conn)
    {
        echo "connected successfully!";
    }
?>
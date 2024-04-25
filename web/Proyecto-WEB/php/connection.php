<?php
    $servername = getenv("DATABASE_IP");
    $user = getenv("DATABASE_USER");
    $password = getenv("DATABASE_PW");
    $database = getenv("DATABASE_NAME");
    $conn = new mysqli($servername, $user, $password, $database);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
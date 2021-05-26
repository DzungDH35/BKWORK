<?php
    $server = "localhost";
    $username = "root";
    $pwd = "";
    $database = "bkwork";

    $dbConnection = new mysqli($server, $username, $pwd, $database);
    if ($dbConnection->connect_errno) {
        echo "Failed to connect to MySQL: " . $dbConnection->connect_error;
        exit();
    }
?>
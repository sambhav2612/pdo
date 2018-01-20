<?php
    $host       = "localhost:3306";
    $username   = "root";
    $password   = "abcde123";
    $dbname     = "test"; // will use later
    $dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
    $options    = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
?>
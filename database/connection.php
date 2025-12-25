<?php

try {
    $host = 'localhost';
    $name = 'biblio';
    $user = 'gigantegordo';
    $pass = '2004';

    $connection = mysqli_connect($host, $user, $pass, $name);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }
} catch (Exception $e) {
    die("Database connection error: " . $e->getMessage());
}


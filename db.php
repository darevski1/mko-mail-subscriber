<?php

//Define database connection

$dsn = "mysql:host=62.108.40.88; dbname=mode.dev";
$user = 'admin';
$password = '123mafijaX';


try {
    $pdo = new PDO($dsn, $user, $password);
}catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}







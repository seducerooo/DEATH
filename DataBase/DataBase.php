<?php

$dbHost = "localhost";
$dbName = "death";
$username = "root";
$password = "";
$dsn = "mysql:host=" . $dbHost . ";dbname=" .$dbName;
try {
    
    $pdo = new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE ,PDO::FETCH_ASSOC);
}catch(PDOException $e) {
    echo $e->getMessage();
}
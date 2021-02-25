<?php
    $user = 'root';
    $password = 'root';
    $db = 'hometask';
    $host = 'localhost';
    $port = 3306;

    $dsn = 'mysql:host='.$host.';dbname='.$db;
    $pdo = new PDO($dsn, $user, $password);
?>
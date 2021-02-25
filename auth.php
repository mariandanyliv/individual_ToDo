<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    require_once './config.php';

    $sql = "INSERT INTO user(email, login, pass) VALUES (?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $login, $pass]);

    echo true;
?>
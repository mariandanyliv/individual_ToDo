<?php
    $email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
    $error = '';
    if (strlen($email) <= 11) {
        echo $error = 'wrong email';
        exit();
    } else if (strlen($login) <= 3) {
        echo $error = 'login length must be greater than 3';
        exit();
        } else if (strlen($pass) <= 6) {
            echo $error = 'passwoed length must be greater than 6';

            exit();
        }

    require_once './config.php';

    $sql = "INSERT INTO user(email, login, pass) VALUES (?, ?, ?)";
    $query = $pdo->prepare($sql);
    $query->execute([$email, $login, $pass]);

    $sql1 = 'SELECT id FROM user';
    $query = $pdo->prepare($sql1);
    $query->execute();
    $user = $query->fetch(PDO::FETCH_OBJ);
    setcookie('log', $user->id, time() + 3600 * 24 * 30, "/");

    echo 'ok';
?>

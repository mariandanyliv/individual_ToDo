<?php
    $login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
    $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

    require_once './config.php';

    $sql = 'SELECT id FROM user WHERE login = :login && pass = :pass';
    $query = $pdo->prepare($sql);
    $query->execute(['login' => $login, 'pass' => $pass]);

    $user = $query->fetch(PDO::FETCH_OBJ);
    if ($user->id == 0) {
       echo  'user not found';
    } else {
        setcookie('log', $user->id, time() + 3600 * 24 * 30, "/");
        
        echo 'ok';
    }
?>

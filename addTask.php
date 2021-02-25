<?php
    $text = trim(filter_var($_POST['text'], FILTER_SANITIZE_EMAIL));

    require_once './config.php';

    $sql = 'INSERT INTO task (text) VALUES (?)';
    $query = $pdo->prepare($sql);
    $query->execute([$text]);

    echo true;
?>

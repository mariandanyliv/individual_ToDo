<?php
    $taskValue = trim(filter_var($_POST['taskValue'], FILTER_SANITIZE_STRING));

    require_once './config.php';

    $sql = "INSERT INTO todoTask(title) VALUES (?)";
    $query = $pdo->prepare($sql);
    $query->execute([$taskValue]);

    echo true;
?>
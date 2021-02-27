<?php
    $text = trim(filter_var($_POST['text'], FILTER_SANITIZE_EMAIL));
    $userId = $_COOKIE['log'];
    $error = '';
    
    if (!$text) {
       echo $error = 'the task cannot be empty';

       exit();
    }

    require_once './config.php';

    $sql = 'INSERT INTO task (text, user_id) VALUES (?, ?)';
    $query = $pdo->prepare($sql);
    $query->execute([$text, $userId]);

    echo 'add';
?>
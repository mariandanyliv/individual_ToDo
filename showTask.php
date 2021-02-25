<?php
    require_once 'config.php';

    $sql = "SELECT title FROM todo_task ORDER BY title";
    $query = $pdo->prepare($sql);
    $query->execute()
?>
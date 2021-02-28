<?php 
    require_once 'config.php';

    $deleteId = $_GET['id'];

    $sql = 'DELETE FROM task WHERE id = ?';
    $query = $pdo->prepare($sql);
    $query->execute([$deleteId]);

    header('Location: /');
?>

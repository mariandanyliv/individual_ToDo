<?php
require_once 'config.php';

$id = $_GET['id'];

$sql = 'SELECT id, checked FROM task WHERE id = ?';
$query = $pdo->prepare($sql);
$query->execute(['$id']);

$isDone = $query->fetchColumn();

if ($isDone == 0) {
    $checked = 0;
} else {
    $checked = 1;
}

$sql = 'UPDATE task SET checked = :checked WHERE id = :id';
$query = $pdo->prepare($sql);
$query->execute(['checked' => $checked, 'id' => $id]);

header('Location: /')
    
?>
<?php
    require_once 'config.php';

    $query = $pdo->query('SELECT * FROM task');
    while($row = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<li>
            <span class="text">' . $row->text . '</span>
            <i class="icon fa fa-trash"></i>
        </li>';
    }
?>
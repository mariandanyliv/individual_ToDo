<?php
    require_once 'config.php';

    $userId = $_COOKIE['log'];
    
    $log = $_COOKIE['log'];
    $sql ='SELECT * FROM task WHERE user_id = ? ORDER BY id DESC';
    $query = $pdo->prepare($sql);
    $query->execute([$userId]);
    $i = 0;
    while($row = $query->fetch(PDO::FETCH_OBJ)){  
        if ($row->checked) {
        echo '<li>
                <input type="checkbox">
                <span class="text checked">'. $row->text.'</span>
                <a href="./deleteTask.php?id='.$row->id.'"><i class="icon fa fa-trash"></i></a>
                <small>Create: ' . $row->datatime . ' </small>
            </li>';
        } else {
            echo '<li>
            <input type="checkbox">
            <span class="text">'. $row->text.'</span>
            <a href="./deleteTask.php?id='.$row->id.'"><i class="icon fa fa-trash"></i></a>
            <small>Create: ' . $row->datatime . ' </small>
        </li>';
        }
            $i++;
            } 

 ?>


<?php
    require_once 'config.php';

    $userId = $_COOKIE['log'];
    
    $log = $_COOKIE['log'];
    $sql ='SELECT * FROM task WHERE user_id = ? ORDER BY id DESC';
    $query = $pdo->prepare($sql);
    $query->execute([$userId]);
    $i = 0;
    while($row = $query->fetch(PDO::FETCH_OBJ)){  
        echo '<li>
             <span class="text checkdox">'. $row->text.'</span>
             <a href="./deleteTask.php?id='.$row->id.'"><button><i class="icon fa fa-trash"></i></button></a>

            </li>';
            $i++;
            } 

 ?>


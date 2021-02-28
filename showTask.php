<?php
    require_once 'config.php';

    $userId = $_COOKIE['log'];
    
    $log = $_COOKIE['log'];
    $sql ='SELECT * FROM task WHERE user_id = ? ORDER BY id DESC';
    $query = $pdo->prepare($sql);
    $query->execute([$userId]);
    $i = 0;
    while($row = $query->fetch(PDO::FETCH_OBJ)){ 
        $i++;
        if ($row->checked):
            ?>
                <li class="checked">
                        <div class="content__head">
                            
                        <a href="./checkDownTask.php?id=<?php echo $row->id ?>"><label for="<?php echo $row->id ?>" class="text"><?php echo $row->text ?></label></a>
                      
                                <a href="./deleteTask.php?id=<?php echo $row->id?>"><i class="icon fa fa-trash"></i></a>
                        </div>
                    </form>
                        <small>Create: <?php echo $row->datatime ?> </small>
                </li>
        <?php else: ?>
                <li>
                    <div class="content__head">
                        <a href="./checkUpTask.php?id=<?php echo $row->id ?>"><label for="<?php echo $row->id ?>" class="text"><?php echo $row->text ?></label></a>
                        <a href="./deleteTask.php?id=<?php echo $row->id?>"><i class="icon fa fa-trash"></i></a>
                    </div>
                <small>Create: <?php echo $row->datatime ?> </small>
                </li>

        <?php endif;
    }
?>
 
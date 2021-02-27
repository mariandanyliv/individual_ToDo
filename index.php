<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <?php require_once './head/globakStyle.php' ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ToDo</title>
</head>
<body>
    <div class="container">
        <?php 
            if($_COOKIE['log'] == ''):
        ?>
            <div class="reg">
                <button type="submit" class="btn"><a href="singUp.php">Sing Up</a></button>
                <button type="submit" class="btn"><a href="singIn.php">Sing In</a></button>
                <h2 class="title">ToDo List</h2>
            </div>
        <?php 
            else:
        ?>
            <div class="reg">
                <button type="submit" id="extBtn" class="btn">Exit</button>
            </div>
        <form action="" method="post">
            <h2 class="title">ToDo List</h2>
            <div class="input">
                <input type="text" name="text" id="text" placeholder="Enter your task">
                <button type="submit" id="addTask" class="btn"><i class="fa fa-plus"></i></button>
            </div>
        </form>
        <div class="content">
            <ul>
                <?php require_once 'showTask.php'; ?>
                <div class="pending-text">You Have <?php echo $i; ?> tasks</div>
            </ul>
        </div>
        <?php 
            endif;
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#addTask').click(function() {
            var text = $('#text').val();

            $.ajax({
                url: 'addTask.php',
                type: 'POST',
                cache: false,
                data: {'text': text },
                datatype: 'html',
                success: function(data) {
                    if (data == 'add') {
                    document.location.reload(true);
                    } else {
                        alert(data);
                    }
                }
            });
        });

        $('#extBtn').click(function() {
            $.ajax({
                url: 'exit.php',
                type: 'POST',
                cache: false,
                data: {},
                dataType: 'html',
                success: function(data) {
                    if (data == 'ok') {
                        document.location.reload(true);    
                    }
                }
            });
        });

    </script> 
</body>
</html>

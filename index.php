<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>ToDo</title>
</head>
<body>
    <div class="container">
      <div class="reg">
        <button type="submit" class="btn"><a href="singUp.php">Sing Up</a></button>
        <button type="submit" class="btn"><a href="singUp.php">Sing In</a></button>
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
                <div class="pending-text">dbfdfbd 4</div>
            </ul>
        </div>
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
                if (data === true) {
                document.reload(true);
                }
            }
        });
    });
</script> 
</body>
</html>
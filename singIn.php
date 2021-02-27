<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once './head/globakStyle.php' ?>
    <link rel="stylesheet" href="./css/sign-form.css">
    <title>ToDo</title>
</head>
<body>
    <div class="container">
      <div class="reg">
        <button type="submit" class="btn"><a href="singUp.php">Sing Up</a></button>
        <button type="submit" class="btn"><a href="index.php">ToDo</a></button>
      </div>
      <form action="" method="post" class="sign-form">
            <h2 class="title">Аuthorization</h2>
            <div class="input">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="input">
                <label for="pass">Пароль</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <button type="button" id="authUser" class="btn btn-success">Аuthor</button>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $('#authUser').click(function() {
            var login = $('#login').val();
            var pass = $('#pass').val();

            $.ajax({
                url: 'reg.php',
                type: 'POST',
                cache: false,
                data: {'login': login, 'pass': pass },
                datatype: 'html',
                success: function(data) {
                    if (data === 'ok') {
                    $('#authUser').text('Ok')
                    document.location.replace('/index.php');
                    } else {
                        alert(data);
                    }
                }
            });
        });
    </script> 
</body>
</html>
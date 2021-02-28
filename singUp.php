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
        <button type="submit" class="btn"><a href="index.php">ToDo</a></button>
        <button type="submit" class="btn"><a href="singIn.php">Sing In</a></button>
      </div>
      <form action="" method="post" autocomplete="off" class="sign-form">
            <h2 class="title">Registration</h2>
            <div class="input">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="input">
                <label for="login">Login</label>
                <input type="text" name="login" id="login" class="form-control">
            </div>
            <div class="input">
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass" class="form-control">
            </div>
            <button type="submit" id="regUser" class="btn">Registr</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $('#regUser').click(function() {
            var email = $('#email').val();
            var login = $('#login').val();
            var pass = $('#pass').val();


            $.ajax({
                url: 'auth.php',
                type: 'POST',
                cache: false,
                data: {'email': email, 'login': login, 'pass': pass },
                datatype: 'html',
                success: function(data) {
                    if (data === 'ok') {
                    document.location.replace('./index.php')
                    } else {
                        alert (data);
                    }
                }
            });
        });
    </script> 
</body>
</html>
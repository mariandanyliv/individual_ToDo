<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/singUp.css">
    <title>ToDo</title>
</head>
<body>
    <div class="container">
      <div class="reg">
        <button type="submit" class="btn"><a href="singUp.php">Sing Up</a></button>
        <button type="submit" class="btn"><a href="index.php">ToDo</a></button>
      </div>
      <form action="" method="post">
        <h2 class="title">Аuthorization</h2>
            <div class="input">

            <label for="login">Логін</label>
            <input type="text" name="login" id="login" class="form-control">
            
            <label for="pass">Пароль</label>
            <input type="text" name="pass" id="pass" class="form-control">

            <button type="button" id="regUser" class="btn btn-success">Registr</button>
        </div>
        </form>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!--<script>
  $(document).ready(function() {
      $,ajax({
          url: "showTask.php",
          type: "POST",
          success: function(data) 
      })
  });-->
</script> 
</body>
</html>
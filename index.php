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
        <h2 class="title">ToDo List</h2>
        <div class="input">
            <input type="text" placeholder="Enter your task">
            <button type="submit" class="btn"><i class="fa fa-plus"></i></button>
        </div>
        <div class="content">
            <ul>
                <li>
                    <span class="text">asdg</span>
                    <i class="icon fa fa-trash"></i>
                </li>

                <div class="pending-text">dbfdfbd 4</div>
            </ul>
        </div>
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
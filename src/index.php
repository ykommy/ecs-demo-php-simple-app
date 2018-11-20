<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      if( $_POST["username"] == "admin" && $_POST["password"] == "admin" ) {
      } else {
        header("HTTP/1.0 401 Unauthorized");
        header('X-F5-AUTH: failed');
      }
    }
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple PHP App</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <style>body {margin-top: 40px; background-color: #333;}</style>
        <link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    </head>

    <body>
        <div class="container">
            <div class="hero-unit">
                <h1>Simple PHP App</h1>
                <h2>Congratulations</h2>
                <p>Your PHP application is now running on a container in Amazon ECS.</p>
                <p>The container is running PHP version <?php echo phpversion(); ?>.</p>

                <br>
                <br>
                <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST") {
                      if( $_POST["username"] == "admin" && $_POST["password"] == "admin" ) {
                ?>
                    <p style="color: blue">Logged in!!</p>
                <?php
                      } else {
                ?>
                    <p style="color: red">Wrong Username or Password!</p>
                <?php
                      }
                    }
                ?>
                <form action="index.php" method = "post">
                    Username : <input type ="text" name="username" value = ""><br />
                    Password : <input type = "text" name="password" value = ""><br />
                    <input type="submit" name ="login" value = "Login">
                </form>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

</html>

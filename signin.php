<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hiroto Template">
    <meta name="keywords" content="Hiroto, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiroto | Template</title>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>

  <?php /*header section*/ include "header.php";

  echo "<h1 style='text-align: center;'>SIGN IN</h1>\n";

  ?>

    <!--form section start-->
    <form method="POST" action="signInValidation.php">
      <div class="register_or_signin_form">
        <hr>

          <label for="username"><b>Username</b></label>
          <input type="text" name="username" id="username">

          <label for="psw"><b>Password</b></label>
          <input type="password" name="password" id="password">

          <hr>
          <button type="submit" class="register_or_signinbtn">Sign In</button>
      </div>
    
      <div class="form_go_signin_or_register">
        <p>Havent register yet? <a href="./register.php">Register Now</a>.</p>
      </div>

    </form>
    <!--form section end-->

  <?php /*footer section*/ include "footer.php"; ?>


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
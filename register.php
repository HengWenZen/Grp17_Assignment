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

    <?php

    //Header section
    include "header.php";
    echo "    <h1 style='text-align: center;'>REGISTRATION</h1>\n";
    echo "\n";
    
    ?>

    <!--Form section begin-->
    <form method="POST" action="saveRegister.php">
            <div class="register_or_signin_form">
                <p>Please fill in this form to create an account.</p>
                <hr>
    
                <label for="username"><b>Username</b></label>
                <input type="text" name="username">
    
                <label for="birthday"><b>Birthday</b></label><br>
                <input type="date" name="birthday" >
              
                <label for="email"><b>Email</b></label>
                <input type="text" name="email" id="email">
    
                <label for="phone_number"><b>Telephone Number</b></label>
                <input type="text" name="phone_number" id="telNo">
              
                <label for="psw"><b>Password</b></label>
                <input type="password" name="password" id="password">
    
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              
                <button type="submit" class="register_or_signinbtn">Register</button>
            </div>
                
                <div class="form_go_signin_or_register">
                    <p>Already have an account? <a href="./signin.php">Sign in</a>.</p>
                </div>
    </form>
    <!--form section end-->
        

    <?php
        //footer section
        include "footer.php";
    ?>
    
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
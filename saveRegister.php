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
    echo "    <h1 style='text-align: center;'>REGISTER</h1>\n";
    echo "\n";
    
    ?>

<?php
// define variables and set to empty values
$password = $username = $birthday = $email = $phoneNumber= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = test_input($_POST["password"]);
  $username = test_input($_POST["username"]);
  $birthday = test_input($_POST["birthday"]);
  $email = test_input($_POST["email"]);
  $phoneNumber = test_input($_POST["phone_number"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
// define variables and set to empty values
$usernameErr = $passwordErr = $birthdayErr = $emailErr = $phoneNumberErr = "";
$password = $username = $birthday = $email = $phoneNumber= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["birthday"])) {
    $birthdayErr = "Birthday is required";
  } else {
    $birthday = test_input($_POST["birthday"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "E-mail is required";
  } else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["phone_number"])) {
    $phoneNumberErr = "Phone Number is required";
  } else {
    $phoneNumber = test_input($_POST["phone_number"]);
  }
  
	if(empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  
	//if username error is not blank, will check whether username is alphabet only 
	if (!empty($_POST["username"])) 
	{
		if(preg_match("/^[a-zA-Z ]+$/", $_POST["username"]) === 0)
		{
			$usernameErr = "Alphabets only";
		}
	}
	
	if (!empty($_POST["email"])) 
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$emailErr = "Invalid email format";
		}
	}
	
	//if phoneNumberErr is blank, will check whether H/P is digits only 
	if (!empty($_POST["phone_number"])) 
	{
		if(!is_numeric($_POST["phone_number"]))
		{
			$phoneNumberErr = "Digits only";
		}
		else if(strlen($_POST["phone_number"]) != 10)
		{
			$phoneNumberErr = "10 digits required";
		}
	}
	
	// Password must be strong
	if (!empty($_POST["password"])) 
	{
		if(preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $_POST["password"]) === 0)
		{
			$passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
		}
	}
}
?>
	
<?php
	if((!empty($usernameErr)) || (!empty($passwordErr)) || (!empty($birthdayErr)) || (!empty($emailErr)) || (!empty($phoneNumberErr)))
	{
?>
    <!--Form section begin-->
    <form method="POST" action="saveRegister.php">
            <div class="register_or_signin_form">
                <p>Please fill in this form to create an account.</p>
                <hr>
<?php    
                echo " <label for='username'><b>Username</b></label>";
				echo "<p style='color:red'>$usernameErr</p>";
                echo "<input type='text' name='username'>";
    
                echo "<label for='birthday'><b>Birthday</b></label><br>";
				echo "<p style='color:red'>$birthdayErr</p>";
                echo "<input type='date' name='birthday' >";
              
                echo "<label for='email'><b>Email</b></label>";
				echo "<p style='color:red'>$emailErr</p>";
                echo "<input type='text' name='email' id='email' >";
    
                echo "<label for='phone_number'><b>Telephone Number</b></label>";
				echo "<p style='color:red'>$phoneNumberErr</p>";
                echo "<input type='text' name='phone_number' id='telNo'>";
              
                echo "<label for='psw'><b>Password</b></label>";
				echo "<p style='color:red'>$passwordErr</p>";				
                echo "<input type='password' name='password' id='password'>";
    ?>
	
                <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              
                <button type="submit" class="register_or_signinbtn">Register</button>
            </div>
                
                <div class="form_go_signin_or_register">
                    <p>Already have an account? <a href="./signin.php">Sign in</a>.</p>
                </div>
    </form>
    <!--form section end-->
	
	
    <!--Form section begin-->
	<?php
	}
	else
	{	
		echo "<div class='register_or_signin_form'>";	
	
		if ($db = mysqli_connect('localhost','root','')){
   			print '<p>Successfully connected to MySQL!</p>';
		}
		else {

		}

		if (mysqli_query($db, 'CREATE DATABASE adminControlPanel')) {
			echo '<p>The database has been created!</p>';
		}
		else {

		}

		if (mysqli_select_db($db, "adminControlPanel")) {
			print "<p>The database has been selected.</p>";
		}
		else {

		}

		if ($db) {
			$query = 'CREATE TABLE register_id (
			register_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			username TEXT NOT NULL,
			birthday DATETIME NOT NULL,
			email TEXT NOT NULL,
			phone_number TEXT NOT NULL,
			password TEXT NOT NULL
			)';

			if (mysqli_query($db,$query)) {
				echo '<p>The table has been created.</p>';
			}
			else {

			}
		}

		if ($db) {
			$username = $_POST['username'];
			$birthday = $_POST['birthday'];
			$email = $_POST['email'];
			$phone_number = $_POST['phone_number'];
			$password = $_POST['password'];
			
			$sql = "INSERT INTO register_id (username, birthday, email, phone_number, password)VALUES ('$username','$birthday','$email','$phone_number','$password')";

			if (mysqli_query($db, $sql)) {
				echo "New ID created successfully";
			}
			else {
				echo '<p style="color: red">Could not create new record because: <br />' . mysqli_error($db) . '.</p>';
			}
		}

		mysqli_close($db);
		
		echo "<br>";
		echo "</div>";
	}	
	?>
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
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

  
  
<?php
// define variables and set to empty values
$password = $username= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $password = test_input($_POST["password"]);
  $username = test_input($_POST["username"]);
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
$usernameErr = $passwordErr = "";
$username = $password = "";
$usernameNotSuperman = $passwordNotWonderwomen = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
  
	//if username and password is not blank, will check whether username is alphabet only 
	if (!empty($_POST["username"])) 
	{
		if(preg_match("/^[a-zA-Z ]+$/", $_POST["username"]) === 0)
		{
			$usernameErr = "Alphabets only";
		}
	}
}
?>
  
	<?php
	if((!empty($usernameErr)) || (!empty($passwordErr)) )
	{
	?>
	
    <form method="POST" action="signInValidation.php">
      <div class="register_or_signin_form">
        <hr>

	<?php

        echo "<label for='username'><b>Username</b></label>";
		echo "<p style='color:red'>$usernameErr</p>";
        echo "<input type='text' name='username' id='username'>";

        echo "<label for='psw'><b>Password</b></label>";
		echo "<p style='color:red'>$passwordErr</p>";
        echo "<input type='password' name='password' id='password'>";
		
	?>
	
	        <hr>
          <button type="submit" class="register_or_signinbtn">Sign In</button>
      </div>
    
      <div class="form_go_signin_or_register">
        <p>Havent register yet? <a href="./register.php">Register Now</a>.</p>
      </div>

    </form>

	<?php
	}
	else if((empty($usernameErr)) || (empty($passwordErr)) )
	{
		
		if($username == "Admin" && $password == "Admin")
		{
			echo "<div class='register_or_signin_form'>";
	
			echo "<h2 class='title'>Welcome</h2>";
		
			echo "<h4>You have successfully log into $username.</h4>";
			echo "<br>";
			echo "<h4><a href = 'index.php'>Go back</a> to Main Menu</h4>";
				
			$_SESSION['id'] = $username;
			echo "</div>";
		}		
		else
		{
		
			if ($db = mysqli_connect('localhost','root',''))
			{
			}
			else {
				echo "<p style='color: red';>Could not connect to MYSQL.</p>";
			}
		
			if (mysqli_select_db($db, "adminControlPanel")) 
			{	
			}
			else {
				echo '<p style="color: red">Could not select the database because: <br />' . mysqli_error($db) . '.</p>';
			}
		
			$query = "SELECT * FROM register_id WHERE username = '$username'";	
		
			$result = mysqli_query($db, $query);
		
				if(mysqli_num_rows($result)== 0)
				{
					?>
	
					<form method="POST" action="signInValidation.php">
					<div class="register_or_signin_form">
						<hr>

					<?php

						echo "<label for='username'><b>Username</b></label>";
						echo "<p style='color:red'>Username Not Found</p>";
						echo "<input type='text' name='username' id='username'>";
						echo "<label for='psw'><b>Password</b></label>";
						echo "<input type='password' name='password' id='password'>";
		
					?>
	
						<hr>
					<button type="submit" class="register_or_signinbtn">Sign In</button>
					</div>
    
					<div class="form_go_signin_or_register">
						<p>Havent register yet? <a href="./register.php">Register Now</a>.</p>
					</div>
	
					</form>
					
					<?php
				}
				else
				{
					$rows = mysqli_fetch_array($result);
				
					$passwordRegister = $rows['password'];
					
					if($passwordRegister != $password)
					{
						?>
	
						<form method="POST" action="signInValidation.php">
						<div class="register_or_signin_form">
							<hr>

						<?php

							echo "<label for='username'><b>Username</b></label>";
							echo "<input type='text' name='username' id='username'>";
		
							echo "<label for='psw'><b>Password</b></label>";
							echo "<p style='color:red'>Wrong Password</p>";
							echo "<input type='password' name='password' id='password'>";
		
						?>
	
							<hr>
						<button type="submit" class="register_or_signinbtn">Sign In</button>
						</div>
    
						<div class="form_go_signin_or_register">
							<p>Havent register yet? <a href="./register.php">Register Now</a>.</p>
						</div>
	
						</form>
					
						<?php
						
					}
					else
					{
						echo "<div class='register_or_signin_form'>";

						echo "<h2 class='title'>Welcome</h2>";
		
						echo "<h4>You have successfully log into $username.</h4>";
						echo "<br>";
						echo "<h4><a href = 'index.php'>Go back</a> to Main Menu</h4>";
				
						$_SESSION['id'] = $username;
						echo "</div>";
					}
					
				}
		}
	}
	?>

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
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
    echo "    <h1 style='text-align: center;'>ADDING ROUTE</h1>\n";
    echo "\n";
    
    ?>
	
	<!-- Control Panel Section Begin -->
	<?php
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
			$query = 'CREATE TABLE available_route (
			route_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			date DATETIME NOT NULL,
			from_location TEXT NOT NULL,
			to_location TEXT NOT NULL,
			depart_time TIME NOT NULL,
			arrival_time TIME NOT NULL,
			price TEXT NOT NULL,
			bus_plate_no TEXT NOT NULL,
			bus_name TEXT NOT NULL
			)';

			if (mysqli_query($db,$query)) {
				echo '<p>The table has been created.</p>';
			}
			else {

			}
		}

	echo "</div>";	
		
		mysqli_close($db);
	?>
<!-- Control Panel Section End-->
	

    <!--Form section begin-->
    <form method="POST" action="saveIntoDatabase.php">
            <div class="register_or_signin_form">
                <h3>Adding new Available Route</h3>
                <hr>
					
				<label for="date"><b>Date</b></label><br>
                <input type="date" name="date" required>	
	
                <label for="from_location"><b>From</b></label>
                <input type="text" name="from_location" required>
    
                <label for="to_location"><b>To</b></label><br>
                <input type="text" name="to_location" required>
              
                <label for="depart_time"><b>Depart Time</b></label>
                <input type="time" name="depart_time" required>
				</br>
    
                <label for="arrival_time"><b>Estimated Time Arrival</b></label>
                <input type="time" name="arrival_time" required>
				</br>
				
				<label for="price"><b>Price</b></label>
                <input type="text" name="price" required>
				
				<label for="bus_name"><b>Bus Name</b></label>
                <input type="text" name="bus_name" required>
				
				<label for="bus_plate_no"><b>Bus Number Plate</b></label>
                <input type="text" name="bus_plate_no" required>
             
                <button type="submit" class="register_or_signinbtn">Submit</button>
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
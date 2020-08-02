<!DOCTYPE html>
<html lang="en">

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
    ob_start(); //start output buffering
    /*header section*/ 
    include "header.php"; 
    ?>
	
    <?php
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
		
		$route_to_buy = $_POST['route_to_buy'];
		
		$query = "SELECT * FROM available_route WHERE route_id = $route_to_buy";
		
		if($result = mysqli_query($db, $query))
		{
			while($rows = mysqli_fetch_array($result))
			{			
				$route_id = $rows['route_id'];
				$from_location = $rows['from_location'];
				$to_location = $rows['to_location'];
				$date = $rows['date'];
				$depart_time = $rows['depart_time'];
				$price = $rows['price'];
				$bus_plate_no = $rows['bus_plate_no'];
				$bus_name = $rows['bus_name'];				
			}
		}
		
		if ($db) {
			$query = 'CREATE TABLE purchase_history (
			purchase_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			route_id INT NOT NULL,
			purchase_date DATETIME NOT NULL,
			date DATETIME NOT NULL,
			from_location TEXT NOT NULL,
			to_location TEXT NOT NULL,
			depart_time TIME NOT NULL,
			price TEXT NOT NULL,
			bus_name TEXT NOT NULL,
			bus_plate_no TEXT NOT NULL,
			username TEXT NOT NULL
			)';
			
			mysqli_query($db,$query);
		}
		
		date_default_timezone_set("Asia/Kuala_Lumpur");
		$today_date = date('Y-m-d h:i:s');
		$username = $_SESSION['id'];
		
		if ($db) {
			
			$sql = "INSERT INTO purchase_history (route_id, purchase_date, date, from_location, to_location, depart_time, price, bus_name, bus_plate_no, username)VALUES ('$route_id', '$today_date', '$date', '$from_location','$to_location','$depart_time', '$price', '$bus_name', '$bus_plate_no', '$username')";

			if (mysqli_query($db, $sql)) {
				echo "<div class='register_or_signin_form'>";
				echo "<h2 class='title'>THANK YOU</h2>";
		
				echo "<h4>Thank You For Booking Our Bus</h4>";
				echo "<br>";
				echo "<h4>Check Your Purchase History <a href = 'purchasehistory.php'>Here</a></h4>";

				echo "</div>";
			}
			else {
				echo '<p style="color: red">Could not create new record beacause: <br />' . mysqli_error($db) . '.</p>';
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
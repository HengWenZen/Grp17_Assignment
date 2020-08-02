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

    <!--Form section begin-->
	<?php
	echo "<div class='register_or_signin_form'>";
	
		if ($db = mysqli_connect('localhost','root','')){
   			print '<p>Successfully connected to MySQL!</p>';
		}
		else {
			echo "<p style='color: red';>Could not connect to MYSQL.</p>";
		}
		
		if (mysqli_select_db($db, "adminControlPanel")) {
			print "<p>The database has been selected.</p>";
		}
		else {
			echo '<p style="color: red">Could not select the database because: <br />' . mysqli_error($db) . '.</p>';
		}

		if ($db) {
			$date = $_POST['date'];
			$from_location = $_POST['from_location'];
			$to_location = $_POST['to_location'];
			$depart_time = $_POST['depart_time'];
			$arrival_time = $_POST['arrival_time'];
			$price = $_POST['price'];
			$bus_plate_no = $_POST['bus_plate_no'];
			$bus_name = $_POST['bus_name'];
			
			$sql = "INSERT INTO available_route (date, from_location, to_location, depart_time, arrival_time, price, bus_plate_no, bus_name)VALUES ('$date','$from_location','$to_location','$depart_time','$arrival_time', '$price', '$bus_plate_no', '$bus_name')";

			if (mysqli_query($db, $sql)) {
				echo "New Route created successfully";
			}
			else {
				echo '<p style="color: red">Could not create new record beacause: <br />' . mysqli_error($db) . '.</p>';
			}
		}

		mysqli_close($db);
		
		echo "<br>";
	echo 	"</div>";
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
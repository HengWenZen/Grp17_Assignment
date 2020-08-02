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
	echo "<h1 style = 'text-align: center;'>Purchase History</h1>\n";
?>

<?php	
if (!isset ($_SESSION ['id']))
{
		
	echo "<div class='register_or_signin_form'>";

	echo "<h2 class='title'>Sign In</h2>";
	echo "<br>";
	echo "<h4>Please <a href = 'signin.php'>Sign In</a> To Check Your Purchase History</h4>";

	echo "</div>";
}
else
{
	?>
	

<?php
    //table section start
    $username = $_SESSION['id'];
	echo "<h4 style = 'text-align: center;'>Welcome, $username</h4>";
	
	echo "<section class='table-sec'>";
    echo "    <div class='section-title'>";
    echo "    </div>";
    echo "    ";
	
	

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
		
		$query = "SELECT * FROM purchase_history WHERE username = '$username' ORDER BY date";
		
		echo "        <div class='bus-table'>";
		echo "            <table>";
		echo "                <tr>";
		echo "                    <th>PURCHASE DATE</th>";
		echo "                    <th>FROM</th>";
		echo "                    <th>TO</th>";
		echo "                    <th>DEPARTURE TIME</th>";
		echo "                    <th>PRICE</th>";
		echo "                    <th>BUS NAME</th>";		
		echo "                    <th>Bus Plate No</th>";
		echo "                </tr>";	
		
		if($result = mysqli_query($db, $query))
		{
			while($rows = mysqli_fetch_array($result))
			{			
				    echo "<tr>";
						echo "<td>";
						$date_purchase = date_create($rows['purchase_date']);
						echo date_format($date_purchase,"Y/m/d");
						echo "</td>";
						
						echo "<td>";
						echo $rows['from_location'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['to_location'];
						echo "</td>";			
						
						echo "<td>";
						$date_departure= date_create($rows['date']);
						echo date_format($date_departure,"Y/m/d");
						echo " ";
						$time= date_create($rows['depart_time']);
						echo date_format($time,"h:i A");
						echo "</td>";

						echo "<td>RM ";
						echo $rows['price'];
						echo "</td>";	
						
						echo "<td>";
						echo $rows['bus_name'];
						echo "</td>";								
						
						echo "<td>";
						echo $rows['bus_plate_no'];
						echo "</td>";		
						
					echo "</tr>";
					

			}
		}
		    	echo "</table>";
				echo "</div>";
    //table section end
    ?>
	
	<?php
	
	}
	
	?>

<?php include /*footer section*/ "footer.php" ?>

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
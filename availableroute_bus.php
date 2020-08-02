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
ob_start(); //start output buffering
/*header section */ include "header.php"; 
?>

<?php
    //table section start
    echo "<h1 style = 'text-align: center;'>AVAILABLE BUS</h1>";
    
	echo "<section class='table-sec'>";
	
		$previous_bus = "AAA0000";
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
		
		$query = 'SELECT * FROM available_route ORDER BY bus_name';
		
		if($result = mysqli_query($db, $query))
		{
			while($rows = mysqli_fetch_array($result))
			{			
				$bus_name = $rows['bus_name'];
				
				if(strcmp($bus_name, $previous_bus) != 0 && $previous_bus != "AAA0000")
				{
					echo "</table>";
					echo "</div>";
				}
				
				if(strcmp($bus_name, $previous_bus) != 0) 
				{
					echo "        <div class='bus-table'>";
					echo "            <table>";
					echo "                <tr>";
					echo "                    <th colspan='9' style='text-align: center;'>";
					echo                          $rows['bus_name'];
					echo "                    </th>";
					echo "                </tr>";
					
					$previous_bus = $rows['bus_name'];
					
					echo "                <tr>";
					echo "                    <th>DATE</th>";
					echo "                    <th>FROM</th>";
					echo "                    <th>TO</th>";
					echo "                    <th>DEPART TIME</th>";
					echo "                    <th>ESTIMATED TIME ARRIVAL</th>";
					echo "                    <th>Bus Plate No</th>";					
					echo "                    <th>PRICE</th>";
					echo "                </tr>";

				    echo "<tr>";
						echo "<td>";
						$date = date_create($rows['date']);
						echo date_format($date,"Y/m/d");
						echo "</td>";
					
						echo "<td>";
						echo $rows['from_location'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['to_location'];
						echo "</td>";			
						
						echo "<td>";
						$time= date_create($rows['depart_time']);
						echo date_format($time,"h:i A");
						echo "</td>";

						echo "<td>";
						$time= date_create($rows['arrival_time']);
						echo date_format($time,"h:i A");
						echo "</td>";

						echo "<td>";
						echo $rows['bus_plate_no'];
						echo "</td>";						
						
						echo "<td>RM ";
						echo $rows['price'];
						echo "</td>";		
						
					echo "</tr>";
					
				}
				else
				{
				    echo "<tr>";
						echo "<td>";
						$date = date_create($rows['date']);
						echo date_format($date,"Y/m/d");
						echo "</td>";
					
						echo "<td>";
						echo $rows['from_location'];
						echo "</td>";
						
						echo "<td>";
						echo $rows['to_location'];
						echo "</td>";			
						
						echo "<td>";
						$time= date_create($rows['depart_time']);
						echo date_format($time,"h:i A");
						echo "</td>";

						echo "<td>";
						$time= date_create($rows['arrival_time']);
						echo date_format($time,"h:i A");
						echo "</td>";
						
						echo "<td>";
						echo $rows['bus_plate_no'];
						echo "</td>";									

						echo "<td>RM ";
						echo $rows['price'];
						echo "</td>";		
						
					echo "</tr>";
				}
			}
		}
		
    echo "            </table>";
    echo "        </div>";
    //table section end
    
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
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
    //table section start
    echo "<h1 style = 'text-align: center;'>AVAILABLE ROUTE</h1>";
    
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
		
		$query = 'SELECT * FROM available_route ORDER BY date';
		
		$previous_date = date_create("00/00/0000");		
		
		if($result = mysqli_query($db, $query))
		{
			while($rows = mysqli_fetch_array($result))
			{			
				$date = date_create($rows['date']);
	
				if($date != $previous_date && $previous_date != date_create("00/00/0000"))
				{
					echo "</table>";
					echo "</div>";
				}
				
				if($date != $previous_date) 
				{
					echo "        <div class='bus-table'>";
					echo "            <table>";
					echo "                <h1>";

					echo date_format($date,"Y/m/d");
					$previous_date = $date;			
				
					echo "</h1>";
					echo "                <tr>";
					echo "                    <th>FROM</th>";
					echo "                    <th>TO</th>";
					echo "                    <th>DEPART TIME</th>";
					echo "                    <th>ESTIMATED TIME ARRIVAL</th>";
					echo "                    <th>PRICE</th>";
					echo "                    <th>BUS NAME</th>";
					echo "                    <th>Bus Plate No</th>";
					echo "                </tr>";	

				    echo "<tr>";
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
				else
				{
				    echo "<tr>";
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
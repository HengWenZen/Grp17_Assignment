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


<?php /*Header Section*/ include "header.php"; ?>

<?php

    //Hero Section Begin
echo "    <section class='hero spad set-bg' data-setbg='img/hero.png'>";
echo "        <div class='container'>";
echo "            <div class='row'>";
echo "                <div class='col-lg-12'>";
echo "                    <div class='hero__text'>";
echo "                        <h5>Welcome to Bus Company</h5>";
echo "                        <h2>Book your bus ticket now with us!</h2>";
echo "                    </div>";
echo "                    <form action='#' class='filter__form'>";
echo "                         <div class='filter__form__item filter__form__item--search'>";
echo "                             <p>From Location</p>";
echo "                            <div class='filter__form__input'>";
echo "                                <input type='text' name='locationFrom' placeholder='Alor Setar, Kedah'>";
echo "                                <span class='icon_search'></span>";
echo "                            </div>";
echo "                         </div>";

echo "                          <div class='filter__form__item filter__form__item--search'>";
echo "                              <p>To Location</p>";
echo "                             <div class='filter__form__input'>";
echo "                                <input type='text' name='locationTo' placeholder='Bayan Lepas, Penang'>";
echo "                                <span class='icon_search'></span>";
echo "                             </div>";
echo "                          </div>";

echo "                          <div class='filter__form__item'>";
echo "                              <p>Check In</p>";
echo "                              <div class='filter__form__datepicker'>";
echo "                                <span class='icon_calendar'></span>";
echo "                                <input type='text' class='datepicker_pop check__in'>";
echo "                                <i class='arrow_carrot-down'></i>";
echo "                          </div>";
echo "                      </div>";

echo "                              <button type='submit'>SEARCH NOW</button>";
echo "                     </form>";

echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </section>";
    //Hero Section End

    //About Us Section
echo "    <section class='home-about'>";
echo "        <div class='container'>";
echo "            <div class='row'>";
echo "                <div class='col-lg-6'>";
echo "                    <div class='home__about__text'>";
echo "                        <div class='section-title'>";
echo "                            <h5>ABOUT US</h5>";
echo "                            <h2>Welcome to Bus Company</h2>";
echo "                        </div>";
echo "                        <p class='first-para'>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut";
echo "                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>";
echo "                        <p class='last-para'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium";
echo "                            doloremque.</p>";
echo "                        <img src='img/home-about/5Star.png' alt=''>";
echo "                    </div>";
echo "                </div>";
echo "                <div class='col-lg-6'>";
echo "                    <div class='home__about__pic'>";
echo "                        <img src='img/home-about/inner-bus.jpg' alt=''>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </section>";
    //About Us Section End

    //Services Section Begin
echo "    <section class='services spad'>";
echo "        <div class='container'>";
echo "            <div class='row'>";
echo "                <div class='col-lg-4 col-md-4 col-sm-6'>";
echo "                    <div class='services__item'>";
echo "                        <h4>Free Wi-Fi</h4>";
echo "                        <p>We provide free high-speed internet for our passengers so that you can stay connected and not bore on the road.</p>";
echo "                    </div>";
echo "                </div>";
echo "                <div class='col-lg-4 col-md-4 col-sm-6'>";
echo "                    <div class='services__item'>";
echo "                        <h4>Comfortable Bus Seat</h4>";
echo "                        <p>We provide the most comfortable seat to our customer so you can have a good rest.</p>";
echo "                    </div>";
echo "                </div>";
echo "                <div class='col-lg-4 col-md-4 col-sm-6'>";
echo "                    <div class='services__item'>";
echo "                        <h4>Entertainment</h4>";
echo "                        <p>All seat are equipped with a TV Monitor and headset that allow you to watch movie and play video games on the road.</p>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </section>";
    //Services Section End

    //Available Route Section Begin

echo "<section class='table-sec'>";
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
    

echo "            <div class='container'>";
echo "                <div class='table__register'>";
echo "                    <div class='row'>";
echo "                        <div class='col-lg-9 col-md-8'>";
echo "                            <h3>Havent register? Join us now to to enjoy 50% discount on your first purchase!</h3>";
echo "                        </div>";
echo "                        <div class='col-lg-3 col-md-4 text-center'>";
echo "                            <a href='./register.php' class='primary-btn'>Register Now</a>";
echo "                        </div>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "    </section>";
    //Avaialble Route Section End

    //Chooseus Section Begin\
echo "    <div class='chooseus spad set-bg' data-setbg='img/chooseus-bg.jpg'>";
echo "        <div class='container'>";
echo "            <div class='row d-flex justify-content-center'>";
echo "                <div class='col-lg-8 text-center'>";
echo "                    <div class='chooseus__text'>";
echo "                        <div class='section-title'>";
echo "                            <h5>WHY CHOOSE US</h5>";
echo "                            <h2>Contact us now to get the latest deals and for the next booking</h2>";
echo "                        </div>";
echo "                        <a href='bookingBus.php' class='primary-btn'>Booking Now</a>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </div>";
    //Chooseus Section End

    //Gallery Section Begin
echo "    <section class='gallery spad'>";
echo "        <div class='gallery__text'>";
echo "            <div class='container'>";
echo "                <div class='row'>";
echo "                    <div class='col-lg-6 col-md-6 col-sm-6'>";
echo "                        <div class='section-title'>";
echo "                            <h5>OUR GALLERY</h5>";
echo "                            <h2>START TRAVELLING NOW</h2>";
echo "                        </div>";
echo "                    </div>";
echo "                    <div class='col-lg-6 col-md-6 col-sm-6'>";
echo "                        <div class='gallery__title'>";
echo "                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat";
echo "                                nulla pariatur. Sunt in culpa qui officia deserunt mollit anim.</p>";
echo "                            <a href='./gallery.php' class='primary-btn'>View Gallery <span class='arrow_right'></span></a>";
echo "                        </div>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "        <div class='gallery__slider owl-carousel'>";
echo "            <div class='gallery__item small__item set-bg' data-setbg='img/gallery/gallery-1.jpg'></div>";
echo "            <div class='gallery__item set-bg' data-setbg='img/gallery/gallery-2.jpg'></div>";
echo "            <div class='gallery__item set-bg' data-setbg='img/gallery/gallery-3.jpg'></div>";
echo "            <div class='gallery__item set-bg' data-setbg='img/gallery/gallery-4.jpg'></div>";
echo "        </div>";
echo "    </section>";
    //Gallery Section End

?>

<?php /*footer Section*/ include "footer.php"; ?>

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
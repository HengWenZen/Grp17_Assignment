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

  echo "<h1 style='text-align: center;'>ADMIN CONTROL PANEL</h1>\n";
  echo "<p style='text-align: center;'>Create database, Add Available Route</p>\n";
  ?>

<?php	
if (!isset ($_SESSION ['id']) || $_SESSION['id'] != "Admin")
{
	echo "<div class='register_or_signin_form'>";

	echo "<h2 class='title'>Sign In</h2>";
	echo "<br>";
	echo "<h4>Please <a href = 'signin.php'>Sign In</a> To Admin Account to Use This Function</h4>";

	echo "</div>";
}
else
{
	?>
<!-- Control Panel Section Begin -->
<?php
echo '<section class="site-section">';
echo '<div class="container">';
echo '';
echo '<div class="mb-5">';
echo '';
echo '<div class="row align-items-start job-item border-bottom pb-3 mb-3 pt-3">';
echo '<div class="col-md-4">';
echo '<h2><a href="addAvailableRoute.php">Add Available Route</a> </h2>';
echo '</div>';
echo '</div>';
echo '';
echo '';
echo '</div>';
echo '';
echo '<div class="row pagination-wrap">';
echo '';
echo '</div>';
echo '';
echo '</div>';
echo '</section>';
echo '';	

?>
<!-- Control Panel Section End-->
	
	<?php
	
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
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

<style>
.gallery-img{
    width: 350px;
    height: 500px;
    display: block;
    margin-left: auto;
    margin-right: auto;
}
</style>
</head>

<body>


<?php /*Header Section*/ include "header.php"; ?>

<?php

    echo"<h1 style='text-align: center;'>Our Gallery</h1>";

    echo"<img src='img/gallery/gallery-1.jpg' class='gallery-img' alt=''>";
    echo"<p style='text-align: center;'>Kek Lok Si Temple</p>";

    echo"<img src='img/gallery/gallery-2.jpg' class='gallery-img' alt=''>";
    echo"<p style='text-align: center;'>Kuala Lumpur City Centre</p>";

    echo"<img src='img/gallery/gallery-3.jpg' class='gallery-img' alt=''>";
    echo"<p style='text-align: center;'>Pulau Redang</p>";

    echo"<img src='img/gallery/gallery-4.jpg' class='gallery-img' alt=''>";
    echo"<p style='text-align: center;'>Malacca A Famosa</p>";
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
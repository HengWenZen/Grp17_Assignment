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

    <?php /*header section*/ include "header.php"; ?>

    <?php
        //Breadcrumb Begin
    echo "    <div class='breadcrumb-option set-bg' data-setbg='img/breadcrumb-bg.jpg'>";
    echo "        <div class='container'>";
    echo "            <div class='row'>";
    echo "                <div class='col-lg-12 text-center'>";
    echo "                    <div class='breadcrumb__text'>";
    echo "                        <h1>About Us</h1>";
    echo "                        <div class='breadcrumb__links'>";
    echo "                            <a href='./index.html'>Home</a>";
    echo "                            <span>About Us</span>";
    echo "                        </div>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </div>";
        //Breadcrumb End
    
        //About Section Begin
    echo "    <section class='about spad'>";
    echo "        <div class='container'>";
    echo "            <div class='about__content'>";
    echo "                <div class='row'>";
    echo "                    <div class='col-lg-5'>";
    echo "                        <div class='section-title'>";
    echo "                            <h5>Our Specialization</h5>";
    echo "                            <h2>Welcome to Bus Company</h2>";
    echo "                        </div>";
    echo "                    </div>";
    echo "                    <div class='col-lg-7'>";
    echo "                        <div class='about__text'>";
    echo "                            <p>We are the cheapest bus company that offer the best services among all the bus company.</p>";
    echo "                            <p>We strived to serve the best to our customer. Provides the best bus services to our customer in exchange with their satisfaction and support to our company.</p>";
    echo "                        </div>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
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
    echo "                        <p>All seat are equipped with a TV Monitor and headset that allow you to watch movie and play video games on the road</p>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </section>";
        //About Section End
    
        //Chooseus Section Begin
    echo "    <div class='chooseus spad set-bg' data-setbg='img/chooseus-bg.jpg'>";
    echo "        <div class='container'>";
    echo "            <div class='row d-flex justify-content-center'>";
    echo "                <div class='col-lg-8 text-center'>";
    echo "                    <div class='chooseus__text'>";
    echo "                        <div class='section-title'>";
    echo "                            <h5>WHY CHOOSE US</h5>";
    echo "                            <h2>Buy bus ticket with the cheapest price in Malaysia to help you save money</h2>";
    echo "                        </div>";
    echo "                        <a href='./register.php' class='primary-btn'>Join us Now</a>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </div>";
        //Chooseus Section End
    ?>

    <?php /*footer section*/ include "footer.php" ?>

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
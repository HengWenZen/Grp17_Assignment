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

    <?php /*header section*/ include "header.php" ?>

    <?php
        //Map Begin
    echo "    <div class='map'>";
    echo "        <iframe
                  src= 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2942.5524090066037!2d-71.10245469994108!3d42.47980730490846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e3748250c43a43%3A0xe1b9879a5e9b6657!2sWinter%20Street%20Public%20Parking%20Lot!5e0!3m2!1sen!2sbd!4v1577299251173!5m2!1sen!2sbd'
                  height='600' style='border:0;' allowfullscreen=''></iframe>";
    echo "    </div>";
        //Map End
    
        //Contact Section Begin
    echo "    <section class='contact spad'>";
    echo "        <div class='container'>";
    echo "            <div class='row'>";
    echo "                <div class='col-lg-5 col-md-6 col-sm-5'>";
    echo "                    <div class='contact__widget'>";
    echo "                        <div class='contact__widget__item'>";
    echo "                            <h4>Contact Us</h4>";
    echo "                            <ul>";
    echo "                                <li>(123) 456-78-910</li>";
    echo "                                <li>Info.colorlib@gmail.com</li>";
    echo "                            </ul>";
    echo "                        </div>";
    echo "                        <div class='contact__widget__item'>";
    echo "                            <h4>Address</h4>";
    echo "                            <p>96 Ernser Vista Suite 437, NY, <br />United Stated</p>";
    echo "                        </div>";
    echo "                        <div class='contact__widget__time'>";
    echo "                            <h4>Opentime</h4>";
    echo "                            <div class='row'>";
    echo "                                <div class='col-lg-6 col-md-6 col-sm-6'>";
    echo "                                    <div class='contact__widget__time__item'>";
    echo "                                        <ul>";
    echo "                                            <li>Monday - Friday</li>";
    echo "                                            <li><span>8 am - 9 pm</span></li>";
    echo "                                        </ul>";
    echo "                                    </div>";
    echo "                                </div>";
    echo "                                <div class='col-lg-6 col-md-6 col-sm-6'>";
    echo "                                    <div class='contact__widget__time__item'>";
    echo "                                        <ul>";
    echo "                                            <li>Saturday - Sunday</li>";
    echo "                                            <li><span>8 am - 9 pm</span></li>";
    echo "                                        </ul>";
    echo "                                    </div>";
    echo "                                </div>";
    echo "                            </div>";
    echo "                        </div>";
    echo "                    </div>";
    echo "                </div>";
    echo "                <div class='col-lg-6 offset-lg-1 col-md-6 col-sm-7'>";
    echo "                    <div class='contact__form'>";
    echo "                        <h2>Your question?</h2>";
    echo "                        <form action='#'>";
    echo "                            <input type='text' placeholder='Your Name'>";
    echo "                            <input type='text' placeholder='Email'>";
    echo "                            <textarea placeholder='Your Message'></textarea>";
    echo "                            <button type='submit'>Send Message</button>";
    echo "                        </form>";
    echo "                    </div>";
    echo "                </div>";
    echo "            </div>";
    echo "        </div>";
    echo "    </section>";
        //Contact Section End
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
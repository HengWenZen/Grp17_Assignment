<?php
session_start();

    //Page Preloder
echo "    <div id='preloder'>";
echo "        <div class='loader'></div>";
echo "    </div>";

    //Offcanvas Menu Begin
echo "    <div class='offcanvas-menu-overlay'></div>";
echo "    <div class='offcanvas-menu-wrapper'>";
echo "        <div class='offcanvas__logo'>";
echo "            <a href='./index.php'><img src='img/logo.png' alt='></a>";
echo "        </div>";
echo "        <div id='mobile-menu-wrap'></div>";
echo "        <div class='offcanvas__btn__widget'>";
echo "            <a href='availableroute_date.php'>Book Now <span class='arrow_right'></span></a>";
echo "        </div>";
echo "        <div class='offcanvas__widget'>";
echo "            <ul>";
echo "                <li><span class='icon_pin_alt'></span> 96 Ernser Vista Suite 437, NY, US</li>";
echo "                <li><span class='icon_phone'></span> (123) 456-78-910</li>";
echo "            </ul>";
echo "        </div>";
echo "        <div class='offcanvas__language'>";
echo "            <img src='img/lan.png' alt='>";
echo "            <span>English</span>";
echo "            <i class='fa fa-angle-down'></i>";
echo "            <ul>";
echo "                <li>English</li>";
echo "                <li>Chinese</li>";
echo "                <li>Malay</li>";
echo "            </ul>";
echo "        </div>";
echo "        <div class='offcanvas__auth'>";
echo "            <ul>";

	if (!isset ($_SESSION ['id']))
	{
	echo "                <li><a href='./signin.php'>Sign In</a></li>";
	echo "                <li><a href='./register.php'>Register</a></li>";
	} 
	else
	{
	echo "                <li>";
	echo $_SESSION ['id']; 
	echo "                </li>";
	echo "                <li><a href='./logout.php'>Log Out</a></li>";
	}

echo "            </ul>";
echo "        </div>";
echo "    </div>";
    //Offcanvas Menu End

    //Header Section Begin
echo "    <header class='header'>";
echo "        <div class='header__top'>";
echo "            <div class='container'>";
echo "                <div class='row'>";
echo "                    <div class='col-lg-7'>";
echo "                        <ul class='header__top__widget'>";
echo "                            <li><span class='icon_pin_alt'></span> 96 Ernser Vista Suite 437, NY, US</li>";
echo "                            <li><span class='icon_phone'></span> (123) 456-78-910</li>";
echo "                        </ul>";
echo "                    </div>";
echo "                    <div class='col-lg-5'>";
echo "                        <div class='header__top__right'>";
echo "                            <div class='header__top__auth'>";
echo "                                <ul>";
	if (!isset ($_SESSION ['id']))
	{
	echo "                <li><a href='./signin.php'>Sign In</a></li>";
	echo "                <li><a href='./register.php'>Register</a></li>";
	} 
	else
	{
	echo "                <li>";
	echo $_SESSION ['id']; 
	echo "                </li>";
	echo "                <li><a href='./logout.php'>Log Out</a></li>";
	}
echo "                                </ul>";
echo "                            </div>";
echo "                            <div class='header__top__language'>";
echo "                                <img src='img/lan.png' alt='>";
echo "                                <span>English</span>";
echo "                                <i class='fa fa-angle-down'></i>";
echo "                                <ul>";
echo "                                    <li>English</li>";
echo "                                    <li>Chinese</li>";
echo "                                    <li>Malay</li>";
echo "                                </ul>";
echo "                            </div>";
echo "                        </div>";
echo "                    </div>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "        <div class='header__nav__option'>";
echo "            <div class='container'>";
echo "                <div class='row'>";
echo "                    <div class='col-lg-2'>";
echo "                        <div class='header__logo'>";
echo "                            <a href='./index.php'><img src='img/logo.png' alt=''></a>";
echo "                        </div>";
echo "                    </div>";
echo "                    <div class='col-lg-10'>";
echo "                        <div class='header__nav'>";
echo "                            <nav class='header__menu'>";
echo "                                <ul class='menu__class'>";
echo "                                    <li class='active'><a href='./index.php'>Home</a></li>";
echo "                                    <li><a href='#'>Available Route</a>";
echo "                                        <ul class='dropdown'>";
echo "                                            <li><a href='./availableroute_date.php'>Date</a></li>";
echo "                                            <li><a href='./availableroute_bus.php'>Bus Available</a></li>";
echo "                                            <li><a href='./adminControlPanel.php'>Admin Control Panel</a></li>";
echo "                                        </ul>";
echo "                                    </li>";
echo "                                    <li><a href='./purchasehistory.php'>Purchase History</a></li>";
echo "                                    <li><a href='./about.php'>About Us</a></li>";
echo "                                    <li><a href='./contact.php'>Contact</a></li>";
echo "                                </ul>";
echo "                            </nav>";
echo "                            <div class='header__nav__widget'>";
echo "                                <a href='./bookingBus.php'>Book Now <span class='arrow_right'></span></a>";
echo "                            </div>";
echo "                        </div>";
echo "                    </div>";
echo "                </div>";
echo "                <div class='canvas__open'>";
echo "                    <span class='fa fa-bars'></span>";
echo "                </div>";
echo "            </div>";
echo "        </div>";
echo "    </header>";
    //Header Section End
?>
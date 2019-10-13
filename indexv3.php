<?php
require "db.php";
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="zxx"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Create your adventure</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap-select.css">
    <link rel="stylesheet" href="css/scrollbar.css">
    <link rel="stylesheet" href="css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/transitions.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class=<?php if(isset($_SESSION['logged_user'])): ?>
      "tg-home tg-homevthree tg-login"
<?php else: ?>
    "tg-home tg-homevthree"
<?php endif; ?>>
<div class="loader">
    <div class="span">
        <div class="location_indicator"></div>
    </div>
</div>

<nav id="menu">
    <ul>
        <li><a href="indexv3.php">Home</a></li>

        <li><a href="listingvfour.php">Tours</a>
        </li>
        <li><a href="javascript:void(0);">Information</a>
            <ul>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact us</a></li>
            </ul>
        </li>


    </ul>
</nav>

<div id="tg-wrapper" class="tg-wrapper tg-haslayout">

    <header id="tg-header" class="tg-header tg-headervthree tg-haslayout">
        <div class="container-fluid">
            <div class="row">

                <div class="tg-navigationarea tg-headerfixed">
                    <div class="tg-socialsignin">
                        <div class="tg-userbox">
                            <a id="tg-btnsignin" class="tg-btn" href="signup.php"><span>sign in</span></a>
                            <div class="dropdown tg-dropdown">
                                <ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">

                                    <li><a href="logout.php">Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tg-socialsignin">
                        <div class="tg-userbox">
                            <a id="tg-btnsignin" class="tg-btn" href="login.php"><span>Log in</span></a>
                            <div class="dropdown tg-dropdown">
                                <button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
                                    <span><?php echo $_SESSION['logged_user']->login;?></span>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
                                  
                                    <li><a href="logout.php">Sign Out</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <nav id="tg-nav" class="tg-nav">
                        <div class="navbar-header">
                            <a href="#menu" class="navbar-toggle collapsed">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                        </div>
                        <div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
                            <ul>
                                <li><a href="indexv3.php">Home</a></li>
                                <li class="menu-item-has-children menu-item-has-mega-menu"><a href="listingvfour.php">Tours</a>
                                </li>
                                <li class="menu-item-has-children"><a href="javascript:void(0);">Information</a>
                                    <ul class="sub-menu">
                                        <li><a href="aboutus.php">About Us</a></li>
                                        <li><a href="contactus.php">Contact us</a></li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div id="tg-homebannerslider" class="tg-homebannerslider tg-haslayout">
        <div id="tg-homesliderfull" class="tg-homeslider tg-homesliderfull tg-homeslidervthree owl-carousel tg-haslayout">
            <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="china_main.jpg" data-vide-options="position: 50% 50%">
                    <figcaption>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="tg-slidercontent">
                                        <h1>Beijing</h1>
                                        <h2>China</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </figcaption>
                </figure>
                <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="france.jpg" data-vide-options="position: 50% 50%">
                        <figcaption>
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="tg-slidercontent">
                                            <h1>Paris</h1>
                                            <h2>France</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figcaption>
                    </figure>
                    <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="uk.jpg" data-vide-options="position: 25% 75%">
                            <figcaption>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="tg-slidercontent">
                                                <h1>London</h1>
                                                <h2>The United Kingdom</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                        <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="spain.jpg" data-vide-options="position: 25% 75%">
                                <figcaption>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <div class="tg-slidercontent">
                                                    <h1>Madrid</h1>
                                                    <h2>Spain</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                            <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="japan.jpg" data-vide-options="position: 50% 50%">
                                    <figcaption>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="tg-slidercontent">
                                                        <h1>Tokyo</h1>
                                                        <h2>Japan</h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                                <a href="tourbookingdetail.php"><figure class="item" data-vide-bg="Russia.jpg" data-vide-options="position: 50% 50%">
                                        <figcaption>
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                        <div class="tg-slidercontent">
                                                            <h1>Moscow</h1>
                                                            <h2>Russia</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </figcaption>
                                    </figure>
        </div>
        <div id="tg-homesliderthumbnails" class="tg-homeslider tg-homesliderthumbnails tg-homeslidervthree owl-carousel tg-haslayout">
            <figure class="item" data-vide-bg="china_main.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>Beijing</h1>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="france.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>Paris</h1>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="uk.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>London</h1>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="spain.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>Madrid</h1>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="japan.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>Tokyo</h1>
                    </div>
                </figcaption>
            </figure>
            <figure class="item" data-vide-bg="Russia.jpg" data-vide-options="position: 50% 50%">
                <figcaption>
                    <div class="tg-slidercontent">
                        <h1>Moscow</h1>
                    </div>
                </figcaption>
            </figure>
        </div>

    </div>

    <main id="tg-main" class="tg-main tg-haslayout">

        <section class="tg-sectionspace tg-bglight tg-haslayout">
            <div class="container">
                <div class="row">
                    <div class="tg-ourdestination">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle">
                            <figure><a href="listingvfour.php"><img src="images/placeholder/placeholder-01.png" alt="image destinations"></figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 tg-verticalmiddle">
                            <div class="tg-ourdestinationcontent">
                                <div class="tg-sectiontitle tg-sectiontitleleft">
                                    <h2>Explore the world with us!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

</div>

<div id="tg-search" class="tg-search">
    <button type="button" class="close"><i class="icon-cross"></i></button>
    <form>
        <fieldset>
            <div class="form-group">
                <input type="search" name="search" class="form-control" value="" placeholder="search here">
                <button type="submit" class="tg-btn"><span class="icon-search2"></span></button>
            </div>
        </fieldset>
    </form>
</div>

<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="poster: images/singup-img.jpg" data-vide-options="position: 0% 50%">
    <div class="tg-contentarea tg-themescrollbar">
        <div class="tg-scrollbar">
            <button type="button" class="close">x</button>
            <div class="tg-logincontent">
                <nav id="tg-loginnav" class="tg-loginnav">
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">My Wishlist</a></li>
                    </ul>
                </nav>
                <div class="tg-themetabs">
                    <ul class="tg-navtbs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" data-toggle="tab">Already Registered</a></li>
                        <li role="presentation"><a href="#profile" data-toggle="tab">New to Travleu ?</a></li>
                    </ul>
                    <div class="tg-tabcontent tab-content">
                        <div role="tabpanel" class="tab-pane active fade in" id="home">
                            <form class="tg-formtheme tg-formlogin">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Name or Email <sup>*</sup></label>
                                        <input type="text" name="firstname" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password <sup>*</sup></label>
                                        <input type="password" name="password" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-checkbox">
                                            <input type="checkbox" name="remember" id="rememberpass">
                                            <label for="rememberpass">Remember Me</label>
                                        </div>
                                        <span><a href="#">Lost your password?</a></span>
                                    </div>
                                    <button class="tg-btn tg-btn-lg"><span>update profile</span></button>
                                </fieldset>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile">
                            <form class="tg-formtheme tg-formlogin">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Name or Email <sup>*</sup></label>
                                        <input type="text" name="firstname" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label>Password <sup>*</sup></label>
                                        <input type="password" name="password" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-checkbox">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Remember Me</label>
                                        </div>
                                        <span><a href="#">Lost your password?</a></span>
                                    </div>
                                    <button class="tg-btn tg-btn-lg"><span>update profile</span></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="tg-shareor"><span>or</span></div>
            </div>
        </div>
    </div>
</div>
</div>

<script src="js/vendor/jquery-library.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&language=en"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/jquery-scrolltofixed.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/packery.pkgd.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/scrollbar.min.js"></script>
<script src="js/prettyPhoto.js"></script>
<script src="js/countdown.js"></script>
<script src="js/parallax.js"></script>
<script src="js/gmap3.js"></script>
<script src="js/main.js"></script>
</body>
</html>

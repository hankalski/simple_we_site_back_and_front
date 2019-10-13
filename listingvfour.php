<?php
require "db.php";
?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->
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

		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="tg-topbar">
						<nav class="tg-infonav">

						</nav>
						<div class="tg-addnavcartsearch">

							<nav class="tg-cartsearch">
								<ul>
									<li>
										<img src="images/icons/icon-03.png" alt="image destinations"></a>
										<div class="tg-cartitems">

											<div class="tg-btnarea">
												<a class="tg-btn" href="#"><span>view cart</span></a>
											</div>
										</div>
									</li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="tg-navigationarea tg-headerfixed">

						<div class="tg-socialsignin">

							<div class="tg-userbox">
								<a id="tg-btnsignin" class="tg-btn" href="login.php"><span>log in</span></a>
								<div class="dropdown tg-dropdown">
									<ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
										<li><a href="dashboard.php">Dashboard</a></li>
										<li><a href="dashboard.php">Edit Profile</a></li>
										<li><a href="logout.php">Sign Out</a></li>
									</ul>
								</div>
							</div>
                            <div class="tg-userbox">
                                <a id="tg-btnsignin" class="tg-btn" href="signup.php"><span>sign in</span></a>
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

									<li class="menu-item-has-children menu-item-has-mega-menu current-menu-item"><a href="listingvfour.php">Tours</a>
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

		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="background1.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>The best of the best</h1>
							<h2>Choose the tour that suits you the best!</h2>
							<ol class="tg-breadcrumb">
							<li><a href="indexv3.php">Home</a></li>
								<li class="tg-active">tours
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>

		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-listing tg-listingvfour">
								<div class="tg-sectiontitle">
									<h2>Our tours</h2>
								</div>
								<div class="clearfix"></div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="paris.jpg"  alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Paris</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Say “au revoir” to long lines with skip-the-line entry</br>
																 <br>Hear in-depth stories behind the art from your guide</br>
																 <br> See the “Venus de Milo,” the “Mona Lisa,” and more</br>
																 <br> Revisit collections or explore on your own after the tour ends</br></strong></mark></span>
															<span>from</span>
															<h4>$100</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="london.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">London</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Whether it is your first visit to London or you've explored the city before,</br>
																 <br>there are always so many attractions just waiting</br><br> to be discovered on our London day tours!</br>
																 <br> From London sightseeing tours around iconic landmarks such as St. Paul's Cathedral,</br>
																 <br> the Tower of London and the London Eye,</br><br> these expertly guided London tours are specially tailored</br>
																 <br> so that you get the very best out of this historic city.</br>
																	<br>Tour London with the people that know it best!</br></strong></mark></span>
															<span>from</span>
															<h4>$100</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="madrid.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Madrid</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>See the largest and most important collection of Spanish painting in the world</br>
																 <br>Admire paintings by </br><br>Rembrandt, Dürer, Titian, Murillo, Velázquez and Goya</br>
																 <br> Explore the Prado’s sculpture collection and discover more than 900 works and about</br><br> 200 fragments</br>
																 <br> Investigate the European and Spanish schools</br><br> of art from the 15th to the 19th centuries</br>
																 <br>Stroll the galleries of </br>
																	<br>Madrid's Prado Museum to see the royal Dauphin's Treasure</br></strong></mark></span>
															<span>from</span>
															<h4>$200</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="tokyo.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Tokyo</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Travel to the top of the world's tallest freestanding tower</br>
																 <br>Skip the lines at one of Tokyo's</br><br>most popular and thrilling attractions</br>
																 <br>Enjoy a mid-air stroll between the 350-meter-high observation</br>
																 <br>deck and 450-meter-high gallery</br></strong></mark></span>
															<span>from</span>
															<h4>$300</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="moscow.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Moscow</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </br>
																 <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </br>
																 <br>enim ad minim veniam, quis nostrud exercitation ullamco </br>
																 <br>aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </br></strong></mark></span>
															<span>from</span>
															<h4>$400</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="berlin.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Berlin</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </br>
																 <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </br>
																 <br>enim ad minim veniam, quis nostrud exercitation ullamco </br>
																 <br>aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </br></strong></mark></span>
															<span>from</span>
															<h4>$500</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="Beijing.jpg" alt="image destinations">
													<div class="tg-hover">
														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Beijing</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </br>
																 <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </br>
																 <br>enim ad minim veniam, quis nostrud exercitation ullamco </br>
																 <br>aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </br></strong></mark></span>
															<span>from</span>
															<h4>$600</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="tg-trendingtrip">
												<a href="tourbookingdetail.php"><figure>
													<img src="seoul.jpg" alt="image destinations">
													<div class="tg-hover">

														<span class="tg-stars"><span></span></span>
														<span class="tg-locationname">Seoul</span>
														<div class="tg-pricearea">
															<span><strong><mark><br>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do </br>
																 <br>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut </br>
																 <br>enim ad minim veniam, quis nostrud exercitation ullamco </br>
																 <br>aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure </br></strong></mark></span>
															<span>from</span>
															<h4>$750</h4>
														</div>
													</div>
												</a>
											</figure>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

	</div>

	<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="hi.jpg" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Already Registered</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">New to US ?</a></li>
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

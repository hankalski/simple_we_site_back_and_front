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
			<li><a href="indexv3.php">Home</a>

			</li>
			<li><a href="indexv3.php">Tours</a>

			</li>
			<li><a href="javascript:void(0);">Information</a>
				<ul>
					<li><a href="aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contact us</a></li>
				</ul>
			</li>


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
										<a href="javascript:void(0);"><img src="images/icons/icon-03.png" alt="image destinations"></a>
										<div class="tg-cartitems">
											<div class="tg-cartlistitems">
												<h3>Shopping Cart</h3>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="images/products/img-11.jpg" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-subtotal">
													<h2>Subtotal</h2>
													<span>$830</span>
												</div>
											</div>
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
										<li><a href="javascript:void(0);">Sign Out</a></li>
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
									<li class="menu-item-has-children"><a href="indexv3.php">Home</a>

									</li>
									<li><a href="listingvfour.php">Tours</a></li>
									<li class="menu-item-has-children current-menu-item"><a href="javascript:void(0);">Information</a>
										<ul class="sub-menu">
											<li class="current-menu-item"><a href="aboutus.php">About Us</a></li>
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

		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="swiss.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>About Us</h1>
							<ol class="tg-breadcrumb">
								<li><a href="indexv3.php">Home</a></li>
								<li class="tg-active">about us</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>

		<main id="tg-main" class="tg-main tg-haslayout">

			<section class="tg-aboutus">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<figure data-vide-bg="best.jpg" data-vide-options="position: 0% 50%"></figure>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					<div class="row">
						<div class="tg-textbox">
							<div class="tg-sectiontitle">
								<h2>A Little About Us</h2>
							</div>
							<div class="tg-description">
								<p>The best of the best.</p>
								<p>This is not only words.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
					<div class="row">
						<figure data-vide-bg="care.jpg" data-vide-options="position: 0% 50%"></figure>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-left">
					<div class="row">
						<div class="tg-textbox">
							<div class="tg-sectiontitle">
								<h2>We are our customers</h2>
							</div>
							<div class="tg-description">
								<p>Because we value our customers, we work hard to provide the excellent service they deserve.</p>
							</div>
						</div>
					</div>
				</div>
			</section>

	</div>

	<div id="tg-loginsingup" class="tg-loginsingup" data-vide-bg="hi.jpg" data-vide-options="position: 100%">
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

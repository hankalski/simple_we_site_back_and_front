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
	<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
</head>
<body class=<?php if(isset($_SESSION['logged_user'])): ?>
    "tg-home tg-homevthree tg-login"
<?php else: ?>
    "tg-home tg-homevthree"
<?php endif; ?>>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
			Mobile Menu Start
	*************************************-->
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
	<!--************************************
			Mobile Menu End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container-fluid">
				<div class="row">

					<div class="tg-navigationarea tg-headerfixed">

						<div class="tg-socialsignin">

							<div class="tg-userbox">
								<a id="tg-btnsignin" class="tg-btn" href="#tg-loginsingup"><span>sign in</span></a>
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
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Inner Banner Start
		*************************************-->
		<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="plane.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Process payment</h1>

							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Home</a></li>
								<li class="tg-active">Billing Detail</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div id="tg-content" class="tg-content">
								<div class="tg-billingdetail">
									<form class="tg-formtheme tg-formbillingdetail">
										<fieldset>
											<div class="tg-bookingdetail">
												<div class="tg-box">
													<div class="tg-heading">
														<h3>Billing Details</h3>
													</div>
													<div class="clearfix"></div>
													<div class="row">
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>First name <sup>*</sup></label>
																<input type="text" name="firstname" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>Last name <sup>*</sup></label>
																<input type="text" name="lastname" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="form-group">
																<label>Company name <sup>*</sup></label>
																<input type="text" name="companyname" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="form-group">
																<label>Country<sup>*</sup></label>
																<span class="tg-select">
																	<select>
																		<option value="">Select Country</option>
																		<option value="aberdeen">Aberdeen</option>
																		<option value="aldershot">Aldershot</option>
																		<option value="altrincham">Altrincham</option>
																		<option value="aylesbury">Aylesbury</option>
																		<option value="bamber">Bamber</option>
																		<option value="bangor">Bangor</option>
																		<option value="batley">Batley</option>
																		<option value="bebingto">Bebingto</option>
																		<option value="bedford">Bedford</option>
																		<option value="birmingham">Birmingham</option>
																		<option value="blackpool">Blackpool</option>
																		<option value="brentwood">Brentwood</option>
																		<option value="bristol">Bristol</option>
																		<option value="cardiff">Cardiff</option>
																		<option value="carlisle">Carlisle</option>
																		<option value="crawley">Crawley</option>
																		<option value="darlington">Darlington</option>
																		<option value="eastleigh">Eastleigh</option>
																		<option value="edinburg">Edinburg</option>
																		<option value="esher">Esher</option>
																		<option value="glasgow-sco">Glasgow SCO</option>
																		<option value="guildford">Guildford</option>
																		<option value="halesowen">Halesowen</option>
																		<option value="halifax">Halifax</option>
																		<option value="hamilton">Hamilton</option>
																		<option value="leeds">Leeds</option>
																		<option value="leicester">Leicester</option>
																		<option value="liverpool">Liverpool</option>
																		<option value="london">London</option>
																		<option value="louisville">Louisville</option>
																		<option value="manchester">Manchester</option>
																		<option value="sheffield">Sheffield</option>
																	</select>
																</span>
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
															<div class="form-group">
																<label>State / County <sup>*</sup></label>
																<input type="text" name="statecountry" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>Town / City <sup>*</sup></label>
																<input type="text" name="towncity" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>Postcode / ZIP <sup>*</sup></label>
																<input type="text" name="postcode" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>Email Address <sup>*</sup></label>
																<input type="email" name="email" class="form-control" placeholder="">
															</div>
														</div>
														<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
															<div class="form-group">
																<label>Phone Number <sup>*</sup></label>
																<input type="text" name="phonename" class="form-control" placeholder="">
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tg-bookingdetail">
													<div class="tg-widgetpersonprice">
														<h2>Your order details</h2>
														<table class="table table-bordered">
												    <tr>
												    <th width="40%">Product Name</th>
												    <th width="10%">Quantity</th>
												    <th width="20%">Price Details</th>
												    <th width="15%">Order Total</th>

												    </tr>
												    <?php
													if(!empty($_SESSION["cart"]))
													{
														$total = 0;
														foreach($_SESSION["cart"] as $keys => $values)
														{
															?>

												            <tr>
												            <td><?php echo $values["item_name"]; ?></td>
												            <td><?php echo $values["item_quantity"] ?></td>
												            <td>$ <?php echo $values["product_price"]; ?></td>
												            <td>$ <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>

												            </tr>
												            <?php
															$total = $total + ($values["item_quantity"] * $values["product_price"]);
														}
														?>
												        <tr>
												        <td colspan="3" align="right"><strong>Total</strong></td>
												        <td align="right"><strong>$ <?php echo number_format($total, 2); ?></strong></td>

												        </tr>
												        <?php
													}
													?>
												    </table>
														<div class="tg-widgetcontent">
														</div>
													</div>
												</div>
											</div>
										</fieldset>
										<fieldset class="tg-paymentarea">
											<div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
												<div class="tg-panel">
													<h4 class="tg-radio">
														<input type="radio" id="bank-transfer" name="paymenttype" checked>
														<label for="bank-transfer">Direct Bank Transfer</label>
													</h4>
													<div class="tg-panelcontent">
														<div class="tg-description">
															<p>Orders using Direct Bank Transfer are set On Hold until payment clears outside of WooCommerce.</p>
														</div>
													</div>
												</div>
												<div class="tg-panel">
													<h4 class="tg-radio">
														<input type="radio" id="cash" name="paymenttype">
														<label for="cash">Cash On Delivery</label>
													</h4>
													<div class="tg-panelcontent">
														<div class="tg-description">
															<p>Orders using Cash on Delivery are set to Processing until payment is made upon delivery of the order by you or your shipping method.</p>
														</div>
													</div>
												</div>


											</div>
										</fieldset>
										<fieldset>
											<button class="tg-btn" type="submit" id="myBtn"><span>place order</span></button>
											<div id="myModal" class="modal">
												<div class="modal-content">

    <p>Thank you for your order!</p>
	<a href="indexv3.php" class="btn btn-warning" role="button">Go Back Home</a>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal


// When the user clicks the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>



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
						<div class="tg-signupwith">
							<h2>Sign in With...</h2>
							<ul class="tg-sharesocialicon">
								<li class="tg-facebook"><a href="#"><i class="icon-facebook-1"></i><span>Facebook</span></a></li>
								<li class="tg-twitter"><a href="#"><i class="icon-twitter-1"></i><span>Twitter</span></a></li>
								<li class="tg-googleplus"><a href="#"><i class="icon-google4"></i><span>Google+</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--************************************
			Login Singup End
	*************************************-->
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

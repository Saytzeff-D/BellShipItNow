<?php
define("_VALID_PHP", true);
require_once("init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<!--Meta-->
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="keywords" content="Courier DEPRIXA-Integral Web System" />
	<meta name="author" content="Jaomweb">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Favicon-->
	<link rel="icon" href="uploads/favicon.png">

	<!-- Title-->
	<title>Bellshipitnow</title>

	<!--Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600,700%7COpen+Sans:400,600,700" rel="stylesheet">

	<!--Icon fonts-->
	<link rel="stylesheet" href="assets-theme/vendor/strokegap/style.css">
	<link rel="stylesheet" href="assets-theme/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets-theme/vendor/linearicons/style.css">

	<link rel="stylesheet" href="assets-theme/css/bundle.css">
	<link rel="stylesheet" href="assets-theme/css/style.css">

</head>

<body id="top">

	<!--headers-->
	<header class="header header-shrink header-inverse fixed-top">
		<div class="container">
			<nav class="navbar navbar-expand-lg px-md-0">

				<?php require_once("header.php");?> 

			</nav>
		</div> <!-- END container-->
	</header> <!-- END header -->

	<section data-dark-overlay="6" data-init="parallax" class="auspost_sec" style="background:url(assets-theme/img/about/hero.jpg);">
		<div class="container">
			
		</div> <!-- END container-->
	</section> <!-- END intro-hero-->

	<section class="Whatever-sec p-0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6">
					<div class="entry-text">
						<span class="ghb-content-callout">If It Packs, It Posts</span>
						<h1 class="heading-h1 text-white">Whatever you're sending. If It Packs, It Posts.</h1>
						<div class="heading-h4">We've removed the guesswork. Pay flat postage rates based on size, up to 5kg for sending within Australia.</div>
						<div class="link mt-4">
							<a class="c-btn" href="javascript:void(0);">Find out more</a>
						</div>
					</div>
				</div><!-- col -->

				<div class="col-lg-6">
					<div class="img">
						<img src="uploads/photo-teddy-bear-parcel-box-mobile.jpg" alt="global import/export experties">
					</div>
				</div><!-- col -->
			</div><!-- row -->
		</div> <!-- END container-->
	</section> <!-- END section-->

	<section class="trackitem-sec p-0">
		<div class="container">

			<div class="track-option text-center">
				<div class="d-flex flex-wrap track-row">
					<div class="track-col">
						<a href="javascript:void(0);">
							<div class="icon"><i class="fa fa-calculator" aria-hidden="true"></i></div>
							<p>Calculate postage</p>
						</a>
					</div><!-- track-col -->
					<div class="track-col">
						<a href="javascript:void(0);">
							<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
							<p>Redirect or hold mail</p>
						</a>
					</div><!-- track-col -->
					<div class="track-col">
						<a href="javascript:void(0);">
							<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
							<p>Find locations & hours</p>
						</a>
					</div><!-- track-col -->
					<div class="track-col">
						<a href="javascript:void(0);">
							<div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
							<p>Book an appointment</p>
						</a>
					</div><!-- track-col -->
				</div>
			</div><!-- track-option -->

			<div class="card-bx-sec mt-2">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
						  <div class="img p-3 bg-red">
					  		<img src="uploads/illu-gach-kangaroo-aussie-map.svg" class="card-img-top" alt="great shipping in USA">
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">The Great Aussie Coin Hunt is on!</h5>
						    <p class="card-text">
						    	We're celebrating Aussie icons with 26 $1 coins from A to Zooper Dooper. Head into your local participating Post Office for your chance to find all 26 $1 coins.
						    </p>
						    <a class="c-btn text-pink" href="javascript:void(0);">View the coins</a>
						  </div>
						</div><!-- card -->
					</div><!-- col -->

					<div class="col-lg-4">
						<div class="card">
						  <div class="img p-3 bg-lblue">
					  		<img src="uploads/illu-eofy.svg" class="card-img-top" alt="manage deliveries and add delivery addresses">
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Get a Post Office in your pocket</h5>
						    <p class="card-text">
						    	Use our app to track parcels, manage deliveries and add delivery addresses while you're on the go.
						    </p>
						    <a class="c-btn text-pink" href="javascript:void(0);">Download the app now</a>
						  </div>
						</div><!-- card -->
					</div><!-- col -->

					<div class="col-lg-4">
						<div class="card">
						  <div class="img p-3 bg-lgreen">
					  		<img src="uploads/Sea-Mail.svg" class="card-img-top" alt="bellshipitnow-unbox the possibilities">
						  </div>
						  <div class="card-body">
						    <h5 class="card-title">Sending overseas this Christmas?</h5>
						    <p class="card-text">
						    	If you're sending by International Economy Sea Mail, be sure to post your parcel before our cut-off dates.
						    </p>
						    <a class="c-btn text-pink" href="javascript:void(0);">View cut-off dates</a>
						  </div>
						</div><!-- card -->
					</div><!-- col -->
				</div><!-- row -->
			</div><!-- card-bx-sec -->

		</div> <!-- END container-->
	</section> <!-- END section-->

	

	<hr class="m-0">

	<?php require_once("footer.php");?> 

	<div class="scroll-top bg-white box-shadow-v1">
		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</div> 

	<script src="assets-theme/js/bundle.js"></script>
	<script src="assets-theme/js/fury.js"></script>

</body>	

</html>
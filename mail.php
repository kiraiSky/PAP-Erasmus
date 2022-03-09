<!DOCTYPE html>
<html dir="ltr" lang="pt-PT">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,900&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />

	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="css/components/bs-switches.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name='viewport' content='initial-scale=1, viewport-fit=cover'>

	<!-- Seo Demo Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors.php?color=FE9603" type="text/css" /> <!-- Theme Color -->
	<link rel="stylesheet" href="demos/seo/css/fonts.css" type="text/css" />
	<link rel="stylesheet" href="demos/seo/seo.css" type="text/css" />

	<!-- Document Title
	============================================= -->
	<title>Healthy Heritage Tracks</title>
	<style>

		.revo-slider-emphasis-text {
			font-size: 64px;
			font-weight: 700;
			letter-spacing: -1px;
			font-family: 'Poppins', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Poppins', sans-serif;
		}
		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

</head>

<body class="stretched">

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<?php
		include('menu.php');
		?>

		<!-- Page Title
		============================================= -->
		<!--<section id="page-title">
			<div class="container clearfix">
				<h1>Contact</h1>
				<span>Get in Touch with Us</span>
			</div>
		</section>--><!-- #page-title end -->

		<!-- Contact Form & Map Overlay Section
		============================================= -->
		<section id="map-overlay">
			<div class="container">

				<div class="row">
					<!-- Contact Form Overlay
					============================================= -->
					<div class="contact-form-overlay col-md-8 offset-md-2 p-5">

						<div class="fancy-title title-border">
							<h3>Send us an Email</h3>
						</div>

						<div class="form-widget">

							<div class="form-result"></div>

							<!-- Contact Form
							============================================= -->
							<form class="row mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

								<div class="col-md-6 form-group">
									<label for="template-contactform-name">Name <small>*</small></label>
									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
								</div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-email">Email <small>*</small></label>
									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
								</div>

								<div class="w-100"></div>

								<div class="col-md-6 form-group">
									<label for="template-contactform-phone">Phone</label>
									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
								</div>

								<!--<div class="col-md-6 form-group">
									<label for="template-contactform-service">Services</label>
									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
										<option value="">-- Select One --</option>
										<option value="Wordpress">Wordpress</option>
										<option value="PHP / MySQL">PHP / MySQL</option>
										<option value="HTML5 / CSS3">HTML5 / CSS3</option>
										<option value="Graphic Design">Graphic Design</option>
									</select>
								</div>-->

								<div class="w-100"></div>

								<div class="col-12 form-group">
									<label for="template-contactform-subject">Subject <small>*</small></label>
									<input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<label for="template-contactform-message">Message <small>*</small></label>
									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
								</div>

								<div class="col-12 form-group d-none">
									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
								</div>

								<div class="col-12 form-group">
									<button class="button button-3d m-0" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
								</div>

								<input type="hidden" name="prefix" value="template-contactform-">

							</form>
						</div>

						<div class="line"></div>

						<div class="row col-mb-50">
							
						</div>

					</div><!-- Contact Form Overlay End -->
				</div>

			</div>
		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">

					<div class="row col-mb-50">
						<div class="col-lg-8">

							<div class="row col-mb-50">
								<div class="col-md-4">

									<div class="widget clearfix">

										<img src="images/erasmus.png" alt="Image" class="footer-logo">

										<p><strong>Partners</strong></p>

										<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
											<p>Escola Secundária de Loulé</br>
											European International School of Barcelona</br>
											Ankara Atatürk Lisesi</br>
											Ahmon koulu</p>
										</div>

									</div>

								</div>

			</div>
		</footer><!-- .footer-widgets-wrap end -->

			</div>
			
		</footer><!-- #footer end -->

			</div>

			
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=YOUR-API-KEY"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>
<?php
session_start();
include_once('functions/verificarTipoUtilizador.php');

sendToIndex();
?>
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

<?php
include('menu.php');
?>

<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		
		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Login</a></li>
							<li class="inline-block"><a href="#tab-register">Register</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="mb-0" action="login-php/login.php" method="post">

											<h3>Login to your Account</h3>

											<div class="row">
												<div class="col-12 form-group">
													<label for="login-form-username">Username:</label>
													<input type="text" id="login-form-username" name="login-form-username" class="form-control" />
													<span id="msgAlertaUser"></span>
												</div>

												<div class="col-12 form-group">
													<label for="login-form-password">Password:</label>
													<input type="password" id="login-form-password" name="login-form-password" class="form-control" />
													<span id="msgAlertaPassword"></span>
												</div>

												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0" id="login-form-submit" name="login-form-submit" value="login" type="">Login</button>
													<a href="#" class="float-end">Forgot Password?</a>
												</div>
												<p class="text-center text-danger">
												<?php 
													//Recuperando o valor da variável global, os erro de login.
													if(isset($_SESSION['loginErro'])){
																		echo $_SESSION['loginErro'];
																		unset($_SESSION['loginErro']);
            						}?>
												</p>
											</div>

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content" id="tab-register">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<h3>Register for an Account</h3>

										<form id="register-form" name="register-form" class="row mb-0" action="login-php/register.php" method="post">

											<div class="col-12 form-group">
												<label for="register-form-name">Name:</label>
												<input type="text" id="register-form-name" name="register-form-name" value="" class="form-control" />

												<span id="msgAlerta"></span>
											</div>

											<div class="col-12 form-group">
												<label for="register-form-email">Email Address:</label>
												<input type="email" id="register-form-email" name="register-form-email" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<label for="register-form-username">Choose a Username:</label>
												<input type="text" id="register-form-username" name="register-form-username" value="" class="form-control" />
												<span class="text-center text-danger">
												<?php 
													//Recuperando o valor da variável global, os erro de login.
													if(isset($_SESSION['registroErro'])){
																		echo $_SESSION['registroErro'];
																		unset($_SESSION['registroErro']);
            						}?>
												</span>
												<span id="msgAlertaUser"></span>
											</div>


											<div class="col-12 form-group">
												<label for="register-form-password">Choose Password:</label>
												<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />

												<span id="msgAlertaPassword"></span>

											</div>

											<div class="col-12 form-group">
												<label for="register-form-repassword">Re-enter Password:</label>
												<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
											</div>

											<div class="col-12 form-group">
												<button class="button button-3d button-black m-0" id="register-form-submit" name="register-form-submit" value="register" type="submit">Register Now</button>
											</div>

										</form>
										<script src="javascript/validarForm.js"></script>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section>
	</br><!-- #content end -->

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
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

</body>
</html>
<?php include('../database/register-database-record.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="https://www.freelancer.com/u/friendstelecom">
    <meta name="author" content="Sagar Nath">
	<meta name="google-signin-client_id" content="140439635114-vsm39kijghfeknth9igt1vuaq0gnjgb4.apps.googleusercontent.com">
    <title>Log In | ElonOver</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="../contact-login-signup-css/bootstrap.min.css" rel="stylesheet">
    <link href="../contact-login-signup-css/vendors.css" rel="stylesheet">
    <link href="../contact-login-signup-css/style.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="../contact-login-signup-css/custom.css" rel="stylesheet">

	<script src="https://apis.google.com/js/platform.js" async defer></script>
</head>

<body>
    <div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->

	<div class="container-fluid p-0">
	    <div class="row no-gutters row-height">
	        <div class="col-lg-6 background-image" data-background="url(img/login-bg.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <a href="https://elonover.io" id="logo"><img src="img/logo46-40.png" alt="" width="46" height="40"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://www.freelancer.com/u/friendstelecom" target="_blank"><i class="social_facebook"></i></a></li>
	                        <li><a href="https://www.freelancer.com/u/friendstelecom" target="_blank"><i class="social_twitter"></i></a></li>
	                        <li><a href="https://www.freelancer.com/u/friendstelecom" target="_blank"><i class="social_instagram"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <h1>Log In For Play</h1>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	                    <a href="https://elonover.io" class="btn_1 rounded pulse_bt">Back To Home</a>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <h4 class="mb-3">Login</h4>
	                        <form class="input_style_1" method="post" action="index.php">
	                            <?php include('../database/errors.php'); ?>
	                            <a href="#0" class="social_bt facebook">Login with Apple</a>
								<a href="#0" class="social_bt google">Login with Google</a>
								<div class="g-signin2" data-onsuccess="onSignIn"></div>
								<div class="divider"><span>Or</span></div>
	                            <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email_address" id="email_address" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password">Password</label>
	                                <input type="password" name="password" id="password" class="form-control">
	                            </div>
	                            <div class="clearfix mb-3">
	                                <div class="float-left">
	                                    <label class="container_check">Remember Me
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                                <div class="float-right">
	                                    <a id="forgot" href="javascript:void(0);">Forgot Password?</a>
	                                </div>
	                            </div>
	                            <button type="submit" name="login_user" class="btn_1 full-width">Login</button>
	                        </form>
	                        <p class="text-center mt-3 mb-0">Don't have an account? <a href="../signup">Sign Up</a></p>
	                        <form class="input_style_1" method="post">
	                            <div id="forgot_pw">
	                                <h4 class="mb-3">Forgot Password</h4>
	                                <div class="form-group">
	                                    <label for="email_forgot">Login email</label>
	                                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
	                                </div>
	                                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
	                                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
	                            </div>
	                        </form>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2021 ElonOver.io - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->
	
	<!-- COMMON SCRIPTS  -->
    <script src="../contact-login-signup-js/common_scripts.js"></script>
    
	<script src="../contact-login-signup-js/common_func.js"></script>
   
</body>
</html>
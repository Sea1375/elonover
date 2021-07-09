<?php include('../database/register-database-record.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="https://www.freelancer.com/u/friendstelecom">
    <meta name="author" content="Sagar Nath">
    <title>Sign Up | ElonOver</title>

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
</head>

<body>
    <div id="preloader">
	    <div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	<div class="container-fluid p-0">
	    <div class="row no-gutters row-height">
	        <div class="col-lg-6 background-image" data-background="url(img/signup-bg.jpg)">
	            <div class="content-left-wrapper opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
	                <a href="../" id="logo"><img src="img/logo46-40.png" alt="" width="46" height="40"></a>
	                <div id="social">
	                    <ul>
	                        <li><a href="https://www.youtube.com/channel/UCILMMq4EirDeBXcb2jtqcSQ" target="_blank"><i class="social_youtube"></i></a></li>
	                        <li><a href="https://twitter.com/ElonOver" target="_blank"><i class="social_twitter"></i></a></li>
	                        <li><a href="https://discord.gg/cQFDuCkxtw" target="_blank"><i class="social_instagram"></i></a></li>
	                    </ul>
	                </div>
	                <!-- /social -->
	                <div>
	                    <h1>Register to Join ElonOver community. </h1>
	                    <p>Join our community to show support of crypto world and stop Elon Musk’s Fudding.</p>
	                    <a href="../" class="btn_1 rounded pulse_bt">Back To Home</a>
	                </div>
	            </div>
	        </div>
	        <div class="col-lg-6 d-flex flex-column content-right">
	            <div class="container my-auto py-5">
	                <div class="row">
	                    <div class="col-lg-9 col-xl-7 mx-auto">
	                        <h4 class="mb-3">Sign Up</h4>
	                        <form class="input_style_1" method="post" action="index.php">
	                            <!-- <a href="#0" class="social_bt facebook">Register with Apple</a> -->
								<!-- <a href="#0" class="social_bt google">Register with Google</a> -->
								<!-- <div class="divider"><span>Or</span></div> -->
	                            <?php include('../database/errors.php'); ?>
	                        	<input id="website" name="website" type="text" value="">
								<!-- Leave for security protection, read docs for details -->
								<div class="form-group">
	                                <label for="full_name">Full Name</label>
	                                <input type="text" name="full_name" id="full_name" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="user_id">User ID #123456</label>
	                                <input type="number" name="user_id" value="<?php echo $user_id; ?>" id="user_id" class="form-control" required>
	                            </div>
	                            
	                            <div class="form-group">
	                                <label for="email_address">Email Address</label>
	                                <input type="email" name="email_address" value="<?php echo $email_address; ?>" id="email_address" class="form-control" required>
	                            </div>
	                            <div class="form-group">
	                                <label for="password1">Password</label>
	                                <input type="password" name="password1" id="password1" class="form-control">
	                            </div>
	                            <div class="form-group">
	                                <label for="password2">Confirm Password</label>
	                                <input type="password" name="password2" id="password2" class="form-control">
	                            </div>
	                            <div id="pass-info" class="clearfix"></div>
	                                <div class="mb-4 terms">
	                                    <label class="container_check">I agree to the <a href="#" data-toggle="modal" data-target="#terms-txt">Terms and Privacy Policy</a>.
	                                        <input type="checkbox" name="agree" id="agree" value="Yes" required>
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </div>
	                            <button type="submit" name="reg_user" class="btn_1 full-width submit">Sign Up</button>
	                        </form>
	                        <p class="text-center mt-3 mb-0">Already have an account? <a href="../login">Log In</a></p>
	                    </div>
	                </div>
	            </div>
	            <div class="container pb-3 copy">© 2021 ElonOver.io - All Rights Reserved.</div>
	        </div>
	    </div>
	    <!-- /row -->
	</div>
	<!-- /container -->

	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
    <script src="../contact-login-signup-js/common_scripts.js"></script>
	<script src="../contact-login-signup-js/common_func.js"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="../contact-login-signup-js/pw_strenght.js"></script>
	<script src="../contact-login-signup-js/jquery.validate.js"></script>
	<script src="../contact-login-signup-js/registration_func.js"></script>
    
</body>
</html>
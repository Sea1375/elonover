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
	                        <li><a href="https://discord.gg/cQFDuCkxtw" target="_blank">
								<img src="../img/others/discord.png" class="discord-icon" />
							</a></li>
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
	                            <!-- <div class="form-group">
	                                <label for="user_id">User ID #123456</label>
	                                <input type="number" name="user_id" value="<?php echo $user_id; ?>" id="user_id" class="form-control" required>
	                            </div> -->
	                            
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
	<div class="modal fade terms" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">ELONOVER TOKEN SALE TERMS AND CONDITIONS</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>The following Terms and Conditions ("Terms") govern your (“you” or the “Purchaser”) purchase of cryptographic tokens ("ELOV") from ElonOver (the “Company”). Each of you and the Company is a “Party” and, together, the “Parties” to these Terms. This document is not a solicitation for investment and does not pertain in any way to an offering of securities in any jurisdiction. This document describes the ELOV token sale.</p>
					<ol>
						<li>IF YOU DO NOT AGREE TO THESE TERMS, DO NOT PURCHASE ELOV FROM THE COMPANY.</li>
						<li>BY PURCHASING ELOV FROM THE COMPANY, YOU WILL BE BOUND BY THESE TERMS AND ANY TERMS INCORPORATED BY REFERENCE. IF YOU HAVE ANY QUESTIONS REGARDING THESE TERMS, PLEASE CONTACT THE COMPANY AT media@ElonOver.io</li>
						<li>By purchasing ELOV, and to the extent permitted by law, you are agreeing not to hold any of the Company and its respective past, present and future employees, officers, directors, contractors, consultants, equity holders, suppliers, vendors, service providers, parent companies, subsidiaries, affiliates, agents, representatives, predecessors, successors and assigns (the “ElonOver Team”) liable for any losses or any special, incidental, or consequential damages arising from, or in any way connected, to the sale of ELOV, including losses associated with the terms set forth below.</li>
						<li>DO NOT PURCHASE ELOV IF YOU ARE NOT AN EXPERT IN DEALING WITH CRYPTOGRAPHIC TOKENS AND BLOCKCHAIN-BASED SOFTWARE SYSTEMS.</li>
						<li>PRIOR TO PURCHASING ELOV, YOU SHOULD CAREFULLY CONSIDER THE TERMS LISTED BELOW AND, TO THE EXTENT NECESSARY, CONSULT AN APPROPRIATE LAWYER, ACCOUNTANT, OR TAX PROFESSIONAL. IF ANY OF THE FOLLOWING TERMS ARE UNACCEPTABLE TO YOU, YOU SHOULD NOT PURCHASE ELOV.</li>
						<li>PURCHASES OF ELOV SHOULD BE UNDERTAKEN ONLY BY INDIVIDUALS, ENTITIES, OR COMPANIES THAT HAVE SIGNIFICANT EXPERIENCE WITH, AND UNDERSTANDING OF, THE USAGE AND INTRICACIES OF CRYPTOGRAPHIC TOKENS.</li>
						<li>PURCHASERS SHOULD HAVE A FUNCTIONAL UNDERSTANDING OF STORAGE AND TRANSMISSION MECHANISMS ASSOCIATED WITH OTHER CRYPTOGRAPHIC TOKENS.</li>
						<li>WHILE THE COMPANY WILL BE AVAILABLE TO ASSIST PURCHASERS OF ELOV DURING THE SALE, THE COMPANY WILL NOT BE RESPONSIBLE IN ANY WAY FOR LOSS OF BTC, ETH, ELOV, OR OTHERS RESULTING FROM ACTIONS TAKEN BY, OR OMITTED BY PURCHASERS.</li>
						<li>IF YOU DO NOT HAVE SUCH EXPERIENCE OR EXPERTISE, THEN YOU SHOULD NOT PURCHASE ELOV OR PARTICIPATE IN THE SALE OF ELOV.</li>
						<li>YOUR PARTICIPATION IN ELOV SALE IS DEEMED TO BE YOUR UNDERTAKING THAT YOU SATISFY THE REQUIREMENTS MENTIONED IN THIS PARAGRAPH.</li>
					</ol>

					<p>PURCHASER AGREES TO BUY, AND COMPANY AGREES TO SELL, THE ELOV TOKENS IN ACCORDANCE WITH THE FOLLOWING TERMS:</p>
					<p class="mb-2">1. Conditions to ELOV token sale</p>
					<p>When you purchase, or otherwise receive, a ELOV token, you may only do so by accepting the following conditions and, by doing so, you warrant and represent that the following are a true and accurate reflection of the basis on which you are acquiring the ELOV tokens:</p>

					<ol>
						<li>neither the Company nor any of the ElonOver Team has provided you with any advice regarding whether ELOV is a suitable investment for you;</li>
						<li>you have sufficient understanding of the functionality, usage, storage, transmission mechanisms and intricacies associated with cryptographic tokens, such as Bitcoin and Ether, as well as blockchain-based software systems generally;</li>
						<li>you are legally permitted to receive and hold and make use of ELOV in your and any other relevant jurisdiction;</li>
						<li>you will supply us with all information, documentation or copy documentation that we require in order to allow us to accept your purchase of ELOV and allocate ELOV to you;</li>
						<li>you have not supplied us with information relating to your acquisition of ELOV or otherwise which is inaccurate or misleading;</li>
						<li>you will provide us with any additional information which may be reasonably required in order that we can fulfil our legal, regulatory and contractual obligations, including but not limited to any anti-money laundering obligation;</li>
						<li>you will notify us promptly of any change to the information supplied by you to us;</li>
						<li>you are of a sufficient age (if an individual) to legally obtain ELOV, and you are not aware of any other legal reason to prevent you from obtaining ELOV;</li>
						<li>you take sole responsibility for any restrictions and risks associated with receiving and holding ELOV, including but not limited to these set out in Annex A;</li>
						<li>by acquiring ELOV, you are not making a regulated investment, as this term may be interpreted by the regulator in your jurisdiction;</li>
						<li>you are not obtaining or using ELOV for any illegal purpose, and will not use ELOV for any illegal purpose;</li>
						<li>you waive any right you may have / obtain to participate in a class action lawsuit or a class wide arbitration against any entity or individual involved with the sale of ELOV;</li>
						<li>your acquisition of ELOV not involve your purchase or receipt of shares, ownership or any equivalent in any existing or future public or private company, corporation or other entity in any jurisdiction;</li>
						<li>to the extent permitted by law and provided we act in good faith, the Company makes no warranty whatsoever, either expressed or implied, regarding the future success of ELOV;</li>
						<li>you accept that ELOV is created and you obtain ELOV on an “as is” and “under development” basis. Therefore, provided the Company acts in good faith, you accept that the Company is providing ELOV without being able to provide any warranties in relation to ELOV, including, but not limited to, title, merchantability or fitness for a particular purpose;</li>
						<li>you accept that you bear sole responsibility for determining if (i) the acquisition, the allocation, use or ownership of ELOV (ii) the potential appreciation or depreciation in the value of ELOV over time, if any, (iii) the sale and purchase of ELOV; and/or (iv) any other action or transaction related to ELOV has tax implications.
					</ol>

					<p>2. All purchases of ELOV are final</p>
					<ol>
						<li>ALL PURCHASES OF ELOV ARE FINAL. PURCHASES OF ELOV ARE NON-REFUNDABLE.</li>
						<li>BY PURCHASING ELOV, THE PURCHASER ACKNOWLEDGES THAT NEITHER THE COMPANY NOR ANY OF ITS AFFILIATES, DIRECTORS OR SHAREHODELRS ARE REQUIRED TO PROVIDE A REFUND FOR ANY REASON.</li>
					</ol>

					<p>3. Updates to the Terms</p>
					<ol>
						<li>The Company reserves the right, at its sole discretion, to change, modify, add, or remove portions of the Terms at any time during the sale by posting the amended Terms on the Website.</li>
						<li>Any Purchaser will be deemed to have accepted such changes by purchasing ELOV.</li>
						<li>The Terms may not be otherwise amended except by express consent of both the Purchaser and the Company.</li>
					</ol>

					<p class="mb-2">4. ELOV Risks</p>
					<p class="mb-2">By purchasing, owning, and using ELOV, you expressly acknowledge and assume the following risks:</p>

					<p class="mb-2 font-weight-bold">1. Risk of Losing Access to ELOV Due to Loss of Private Key(s), Custodial Error or Purchaser Error</p>
					<p>A private key, or a combination of private keys, is necessary to control and dispose of ELOV stored in your digital wallet or vault. Accordingly, loss of requisite private key(s) associated with your digital wallet or vault storing ELOV will result in loss of such ELOV. Moreover, any third party that gains access to such private key(s), including by gaining access to login credentials of a hosted wallet service you use, may be able to misappropriate your ELOV. Any errors or malfunctions caused by or otherwise related to the digital wallet or vault you choose to receive and store ELOV in, including your own failure to properly maintain or use such digital wallet or vault, may also result in the loss of your ELOV. Additionally, your failure to follow precisely the procedures set forth in for buying and receiving Tokens, including, for instance, if you provide the wrong address for the receiving ELOV, or provides an address that is not ERC-20 compatible, may result in the loss of your Tokens.</p>

					<p class="mb-2 font-weight-bold">2. Risks Associated with the Binance Smart Chain Protocol</p>
					<p>Because ELOV and the ElonOver platform are based on the Binance Smart Chain protocol, any malfunction, breakdown or abandonment of the Binance Smart Chain protocol may have a material adverse effect on the platform or ELOV. Moreover, advances in cryptography, or technical advances such as the development of quantum computing, could present risks to the ELOV and the platform, including the utility of the ELOV for obtaining services, by rendering ineffective the cryptographic consensus mechanism that underpins the Binance Smart Chain protocol.</p>

					<p class="mb-2 font-weight-bold">3. Risk of Mining Attacks</p>
					<p>As with other decentralized cryptographic tokens based on the Binance Smart Chain protocol, ELOV are susceptible to attacks by miners in the course of validating ELOV transactions on the blockchain, including, but not limited, to double-spend attacks, majority mining power attacks, and selfish-mining attacks. Any successful attacks present a risk to the platform and ELOV, including, but not limited to, accurate execution and recording of transactions involving ELOV.</p>

					<p class="mb-2 font-weight-bold">4. Risk of Hacking and Security Weaknesses</p>
					<p>Hackers or other malicious groups or organizations may attempt to interfere with the platform or ELOV in a variety of ways, including, but not limited to, malware attacks, denial of service attacks, consensus-based attacks, Sybil attacks, smurfing, and spoofing. Furthermore, because the platform is based on open-source software, there is a risk that a third party or a member of the Company team may intentionally or unintentionally introduce weaknesses into the core infrastructure of the platform, which could negatively affect the platform and ELOV, including the utility of ELOV for obtaining services.</p>

					<p class="mb-2 font-weight-bold">5. Risks Associated with Markets for ELOV</p>
					<p>If secondary trading of Tokens is facilitated by third party exchanges, such exchanges may be relatively new and subject to little or no regulatory oversight, making them more susceptible to fraud or manipulation. Furthermore, to the extent that third-parties do ascribe an external exchange value to ELOV (e.g., as denominated in a digital or fiat currency), such value may be extremely volatile.</p>

					<p class="mb-2 font-weight-bold">6. Risk of Uninsured Losses</p>
					<p>Unlike bank accounts or accounts at some other financial institutions, ELOV are uninsured unless you specifically obtain private insurance to insure them. Thus, in the event of loss or loss of utility value, there is no public insurer or private insurance arranged by Company, to offer recourse to you.</p>

					<p class="mb-2 font-weight-bold">7. Risks Associated with Uncertain Regulations and Enforcement Actions</p>
					<p>The regulatory status of ELOV and distributed ledger technology is unclear or unsettled in many jurisdictions. It is difficult to predict how or whether regulatory agencies may apply existing regulation with respect to such technology and its applications, including the ElonOver platform and ELOV. It is likewise difficult to predict how or whether legislatures or regulatory agencies may implement changes to law and regulation affecting distributed ledger technology and its applications, including the platform and ELOV. Regulatory actions could negatively impact the platform and ELOV in various ways, including, for purposes of illustration only, through a determination that the purchase, sale and delivery of ELOV constitutes unlawful activity or that ELOV are a regulated instrument that require registration or licensing of those instruments or some or all of the parties involved in the purchase, sale and delivery thereof. The Company may cease operations in a jurisdiction in the event that regulatory actions, or changes to law or regulation, make it illegal to operate in such jurisdiction, or commercially undesirable to obtain the necessary regulatory approval(s) to operate in such jurisdiction.</p>

					<p class="mb-2 font-weight-bold">8. Risks Arising from Taxation</p>
					<p>The tax characterization of ELOV is uncertain. You must seek your own tax advice in connection with purchasing ELOV, which may result in adverse tax consequences to you, including withholding taxes, income taxes and tax reporting requirements.</p>

					<p class="mb-2 font-weight-bold">9. Risk of Competing platforms</p>
					<p>It is possible that alternative platforms could be established that utilize the same open source code and protocol underlying the platform and attempt to facilitate services that are materially similar to the ElonOver services.</p>

					<p class="mb-2 font-weight-bold">10. Risks Arising from Lack of Governance Rights</p>
					<p>Because ELOV confer no governance rights of any kind with respect to the ElonOver platform or the Company, all decisions involving the Company’s products or services within the platform or the Company itself will be made by the Company at its sole discretion. These decisions could adversely affect the platform and the utility of any ELOV you own, including their utility for obtaining services.</p>

					<p class="mb-2 font-weight-bold">11. Unanticipated Risks</p>
					<p>Cryptographic tokens such as ELOV are a new and untested technology. In addition to the risks included in this Annex A of these Terms, there are other risks associated with your purchase, possession and use of ELOV, including unanticipated risks. Such risks may further materialize as unanticipated variations or combinations of the risks discussed in this Annex A of these Terms.</p>
					
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
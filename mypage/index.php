<?php 
  session_start(); 

  if (!isset($_SESSION['email_address'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email_address']);
  	header("location: ../");
  }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>ElonOver - Make Crypto Decentralized Again</title>
    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/faviconn.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../css/style.css">

    <!-- Responsive Stylesheet -->
    <link rel="stylesheet" href="../css/responsive.css">

</head>

<body class="darker">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="dream-load"></div>
        </div>
    </div>

<!-- ##### Header Area Start ##### -->
<nav class="navbar navbar-expand-lg navbar-white fixed-top" id="banner">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="https://elonover.io/"><span><img src="../img/others/icon.png" alt="logo"></span> ElonOver.io</a>

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://elonover.io/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#tokenomics">Tokenomics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#technology">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../#roadmap">Roadmap</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contact">Contact</a>
                </li>
                <?php if(isset($_SESSION['email_address'])) { ?>
                <li class="lh-55px">
                    <a href="/mypage" class="btn login-btn ml-50">My Page</a>
                </li>
                <?php } else { ?>
                
                <li class="lh-55px">
                    <a href="../login" class="btn login-btn ml-50">Login</a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- ##### Header Area End ##### -->

<style>
.table-custom {
  width: 100%;
}
.table-custom td {
    background: #2acd72;
    padding: 8px 15px;
    border:5px solid #100f43;
}
td:nth-child(even) {
  background-color: #9898ef;
  text-align: center;
}
@media (max-width: 480px){
	.table-custom td {
    text-align: center;
}
    .table-custom td{
        width:100%;
        display:inline-block;
}
}
</style>

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area section-padding-100 clearfix">
    <div class="container" style="border:1px solid white;">
        <div class="row align-items-center">
            <div class="col-12 col-lg-12 col-md-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <?php  if (isset($_SESSION['email_address'])) : ?>
                        <a class="nav-link" href="#">Hello, <?php echo $_SESSION['full_name']; ?>Mohammad</a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?logout='1'">Sign Out</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- ##### Token Info Start ##### -->
            <div class="col-12 col-lg-6 offset-lg-0 col-sm-12">
                <div class="col-lg-4 col-md-4 col-sm-12"  style="padding:0px;">
                    <div class="services-block-four v2 text-center" style="background-color: rgba(255,255,255,0.05)">
                        <img src="../img/others/wallet.png" alt="" width="140px" style="padding:18px 0px 18px 0px;">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="services-block-four v2"  style="background-color: rgba(255,255,255,0.05)">
                        <div class="inner-box">
                            <h3 class="text-center">Wallet Overview</h3>
                            <table  class="table-custom">
                                <tr>
                                    <td>ELOV Balance</td>
                                    <td>35,000</td>
                                </tr>
                                <tr>
                                    <td>Market Value, USDT</td>
                                    <td>15,500</td>
                                </tr>
                            </table>
                            <div class="text-center">
                                <a class="btn dream-btn fadeInUp" data-wow-delay="0.6s" href="#">Buy More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4 col-md-4 col-sm-12"  style="padding:0px;">
                    <div class="services-block-four v2 text-center"  style="background-color: rgba(255,255,255,0.05)">
                            <img src="../img/others/send.png" alt="" width="140px" style="padding:32px 0px 32px 0px;">
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="services-block-four v2"  style="background-color: rgba(255,255,255,0.05)">
                        <div class="inner-box" >
                            <h3 class="text-center">Token Transfer</h3>
                            <div style="overflow-x:auto;">
                                <table  class="table-custom">
                                    <tr>
                                        <td>Amount</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Wallet</td>
                                        <td>xvcvvxxcg3432fsdffssd988898</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="text-center" style="margin:10px;">
                                <a class="btn dream-btn fadeInUp" data-wow-delay="0.6s" href="#">Send</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1">
                <div class="col-lg-4 col-md-4 col-sm-12"  style="padding:0px;">
                    <div class="services-block-four v2 text-center" style="background-color: rgba(255,255,255,0.05)">
                        <img src="../img/others/elonover-pic.png" alt="" width="177px" >
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 mt-md-30">
                    <div class="services-block-four v2"  style="background-color: rgba(255,255,255,0.05)">
                        <div class="inner-box" style="padding: 10px;">
                            <h3 class="text-center">Game Credit Balance</h3>
                            <table  class="table-custom text-center">
                                <tr>
                                    <td>Start Punching</td>
                                    <td>35,000</td>
                                </tr>
                            </table>
                            <h3 style="padding-left:5px;">My Punching Blocks</h3>
                            <ul class="nav">
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="#">#15,000</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="#">#23,547</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;" href="#">#30,457</a>
                                </li>
                            </ul>
                            <h3 style="padding-left:5px;">Update Center</h3>
                            <ul  style="padding-bottom:5px;">
                                <li class="nav-link">
                                    <a style="color:white;" href="#">Update 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;">Update 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;">Update 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;">Update 4</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" style="color:white;">Update 5</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

    
    <!-- ########## All JS ########## -->
    <!-- jQuery js -->
    <script src="../js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Parallax js -->
    <script src="../js/dzsparallaxer.js"></script>

    <script src="../js/jquery.syotimer.min.js"></script>

    <!-- script js -->
    <script src="../js/script.js"></script>

</body>
</html>
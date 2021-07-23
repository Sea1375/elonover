<?php 
  session_start(); 

  include('../database/connection.php');

  if (!isset($_SESSION['email_address'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: ../');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['email_address']);
  	header("location: ../");
  }

  $user_id = $_SESSION['user_id'];

  if (isset($_POST['save_profile'])) {
    $full_name = $_POST['full_name'];
    $social_link = $_POST['social_link'];
    $image = $_POST['image'];
    $default_wallet = $_POST['default_wallet'];
    
    $query = "UPDATE users SET full_name='$full_name', social_link='$social_link', image='$image', default_wallet='$default_wallet' WHERE id = ". $user_id .";";
    mysqli_query($db, $query);
  }


  /// get user info
  $query = 'SELECT * FROM users WHERE id = ' . $user_id;
  $result = mysqli_query($db, $query);
  $user_info = mysqli_fetch_assoc($result);

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
                    <a href="../mypage" class="btn login-btn ml-50">My Page</a>
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
                <li class="nav-item float-left">
                    <?php  if (isset($_SESSION['email_address'])) : ?>
                    <a class="nav-link text-white" href="#">Hello, <?php echo $_SESSION['full_name']; ?></a>
                    <?php endif ?>
                </li>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="../mypage">My Page</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php?logout='1'">Sign Out</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
            <!-- ##### Token Info Start ##### -->
        </div>
        <div class="row mypage-box">
            <div class="col-12 col-lg-10 offset-lg-0 col-sm-12 token-purchase">
                <form id="form_buy" action="../profile/index.php" method="post" class="pt-2 pb-2">
                    <div class="top border border-primary p-3">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="profile-image">
                                    <img src="<?php if($user_info['image']) { echo '../' . $user_info['image']; } else { echo '../img/others/profile.png'; }?>"/>
                                    <input type="hidden" id="image_file" name="image" value="<?=$user_info['image']?>"/>
                                    <input type="file" id="file_input"  accept="image/png, image/jpeg"/>
                                </div>
                                <div class="">
                                    <button type="button"class="pricing-button btn btn-primary btn-sm btn-block" style="color: white" id="change_image">Change Image</button>
                                </div>
                            </div>
                            <div class="col-sm-9 mt-2">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="bg-green">
                                            <span>Display Name</label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="text" id="full_name" name="full_name" required value="<?=$user_info['full_name']?>"/>
                                    </div>
                                </div>    
                                <div class="row mt-2">
                                    <div class="col-5">
                                        <div class="bg-green">
                                            <span>Social Account Link</label>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <input class="form-control" type="text" id="social_link" name="social_link" value="<?=$user_info['social_link']?>"/>
                                    </div>
                                </div>     
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="bottom border border-primary mt-3 p-3">
                        <div class="">
                            <div class="bg-yellow mb-2">
                                <span>Your Default Wallet Address</span>
                            </div>
                            <div>
                                <input class="form-control" id="default_wallet" name="default_wallet" value="<?=$user_info['default_wallet']?>"/>
                            </div>
                        </div>

                        <div class="mt-2">
                            <button class="btn dream-btn fadeInUp d-block" data-wow-delay="0.6s" style="width: 100%" name="save_profile">Save</button>
                        </div>
                    </div>
                
                </form>
            </div>
            <div class="col-12 col-lg-2 d-lg-flex image-wrapper"  style="padding:0px;">
                <div class="text-center" style="">
                    <img src="../img/others/elonover-pic.png" alt="" width="177px" >
                </div>
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

    <script src="../js/profile.js"></script>

</body>
</html>
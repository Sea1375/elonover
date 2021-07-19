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
  $txs = [];

  $query = 'SELECT * FROM purchases WHERE user_id = ' . $user_id;
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_assoc($result)){
    array_push($txs, $row);  
  }

  $blocks = [];
  $query = "SELECT block FROM purchases WHERE user_id = ".$user_id." and block <> '' GROUP BY block;";
  $result = mysqli_query($db, $query);

  while($row = mysqli_fetch_assoc($result)){
    array_push($blocks, $row['block']);  
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
                        <a class="nav-link" href="#">Hello, <?php echo $_SESSION['full_name']; ?></a>
                        <?php endif ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../profile">Profile</a>
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
        </div>
        <div class="row mypage-box">
            <div class="col-12 col-lg-5 offset-lg-0 col-sm-12 token-purchase">
                <form id="form_buy" action="../payment/index.php" method="post" target="_blank" class="pt-2 pb-2">
                    <div class="top border border-primary p-3">
                        <p class="title">Token Purchase</p>
                        <div class="row">
                            <div class="col-6">
                                <div class="bg-green">
                                    <span>Tokens</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <input class="form-control" type="number" id="buy_amount" name="buy_amount"/>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class="bg-info">
                                    <span>Cost</label>
                                </div>
                                
                            </div>
                            <div class="col-6">
                                <input  class="form-control" type="number" id="buy_cost" name="buy_cost" readonly/>
                            </div>
                        </div>
                    </div>
                    <div class="bottom border border-primary mt-3 p-3">
                        <div class="">
                            <div class="bg-yellow mb-2">
                                <span>Your Wallet Address to Receive Tokens</span>
                            </div>
                            <div>
                                <input class="form-control" id="wallet_address" name="wallet_address"/>
                            </div>
                        </div>

                        <div class="agree-terms mt-2">
                            <input type="checkbox" name="agree" id="agree" value="Yes" required>
                            <label for="agree"><i>Agree to Terms & Conditions</i></label>
                        </div>

                        <div class="mt-2">
                            <a class="btn dream-btn fadeInUp d-block" data-wow-delay="0.6s" id="btn_buy">Buy</a>
                        </div>
                    </div>
                
                </form>
            </div>
            <div class="col-12 col-lg-2 d-lg-flex image-wrapper"  style="padding:0px;">
                    <div class="text-center" style="">
                        <img src="../img/others/elonover-pic.png" alt="" width="177px" >
                    </div>
                </div>
            <div class="col-12 col-lg-5 transaction">
                <div class=""  style="">
                    <div class="inner-box" style="padding: 10px;">
                        <p class="text-center title">My Page</p>
                        
                        <h5 style="padding-left:5px;">My Punching Blocks</h5>
                        <ul class="nav">
                            <?php foreach($blocks as $index => $block) { ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#<?=$block?></a>
                                </li>
                            <?php } ?>
                            
                        </ul>
                        <h5 style="padding-left:5px;">My Transactions</h5>
                        <div class="table-wrapper">
                            <table>
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Amount</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach($txs as $index => $tx) { ?>
                                        <tr>
                                            <td><?=$index+1?></td>
                                            <td><?=$tx['token_amount']?></td>
                                            <td><?=$tx['time']?></td>
                                            <td class="<?php $class= $tx['purchase_status'] == 'pending' ? 'text-warning' : ($tx['purchase_status'] == 'success' ? 'text-success' : 'text-danger'); echo $class;?>"><?=$tx['purchase_status']?></td>
                                        </tr>
                                    <?php } ?>
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- Modal terms -->
<div class="modal fade" id="modal-purchase" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Token Purchase</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
                    <form id="form_buy" action="../payment/index.php" method="post" target="_blank">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="top border border-primary p-3">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="bg-green">
                                                <span>Tokens</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <input class="form-control" type="number" id="buy_amount" name="buy_amount"/>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-6">
                                            <div class="bg-info">
                                                <span>Cost</label>
                                            </div>
                                            
                                        </div>
                                        <div class="col-6">
                                            <input  class="form-control" type="number" id="buy_cost" name="buy_cost" readonly/>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom border border-primary mt-3 p-3">
                                    <div class="">
                                        <div class="bg-yellow mb-2">
                                            <span>Your Wallet Address to Receive Tokens</span>
                                        </div>
                                        <div>
                                            <input class="form-control" id="wallet_address" name="wallet_address"/>
                                        </div>
                                    </div>

                                    <div class="agree-terms mt-2">
                                        <input type="checkbox" name="agree" id="agree" value="Yes" required>
                                        <label for="agree"><i>Agree to Terms & Conditions</i></label>
                                    </div>

                                    <div class="mt-2">
                                        <a class="btn dream-btn fadeInUp d-block" data-wow-delay="0.6s" id="btn_buy">Buy</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="services-block-four v2 text-center" style="background-color: rgba(255,255,255,0.05)">
                                    <img src="../img/others/elonover-pic.png" alt="" width="177px" >
                                </div>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

    
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

    <script src="../js/token_purchase.js"></script>

</body>
</html>
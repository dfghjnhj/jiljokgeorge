<?php
session_start();
include '../dbconnect.php';
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$who=$_SESSION['who'];
$sql="SELECT * FROM login WHERE email='$email' and password='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
if($row !=0 )
{
?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-items/biznex/main/index.html by   [XR&CO'2014], Tue, 12 Feb 2019 05:05:58 GMT -->
<head>
    <!-- Google Tag Manager -->
<!--    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
-->    <!-- End Google Tag Manager -->
    <title>BIZNEX - Multipurpose Business And Corporate HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPoppins:400,500,700,800,900%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

</head>
<body id="top">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="page_loader"></div>

<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="clindex.php">
                        <h1><i>VEGA</i></h1>                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="clindex.php"><br>Index</a>
                             <?php
										
										$sql="SELECT * FROM payment WHERE email='$email'";
$result=mysqli_query($con,$sql);
//$row=mysqli_fetch_array($result);
//print_r($row);
if(mysqli_num_rows($result)>0)
										
					
echo '											<a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="event.php" ><br>Event</a>
                            
											<a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="views.php" ><br>View</a>
                                           
											
';										
							
									else
									{ ?>
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="event.php" onClick="this.removeAttribute('href');"><br>Event</a>
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="views.php" onClick="this.removeAttribute('href');"><br>View</a>
                            <?php
								}								
								?>
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="gallery.php"><br>Gallery</a>
                               <?php
							  $sql1="SELECT * FROM registration WHERE email='$email'";
							 $result=mysqli_query($con,$sql1);
							 $row=mysqli_fetch_array($result);
							 $name=$row['name'];
							   ?>
                                
								
                               		
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <h3> <?php  echo $name ?></h3>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="index-2.html">Request</a></li>
                                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                                   
                                </ul>
                            </li>

                               
                        </ul>
                    </div>
                </nav>
            </div>
      </div>
    </div>
</header>
<!-- main header end -->

<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div >
                        <!-- Logo -->
                        <br>
                        <br>
                        <br>
                        <!-- Form start -->
                        <form action="bankaction.php" method="POST" name="bankp">
               
                            <div class="form-group">
                                <input type="text" name="ba_name" class="input-text" pattern="^[a-zA-Z]+$" placeholder="Name on Bank" required="">
                            </div>
                            <div class="form-group">
                            <input type="text" name="c_no" class="input-text" pattern="^\d{16}$" placeholder="enter 16 digit number" required="">
                            </div>
                            <div class="form-group">
                            <select name="month" >
<option value="jan">Jan</option>
						<option value="feb">Feb</option>   
						<option value="mar">Mar</option>   
						<option value="apr">Apr</option>   
						<option value="may">May</option>   
						<option value="june">June</option>  
						<option value="july">July</option>
						<option value="aug">Aug</option>
                        <option value="sep">Sep</option>
                        <option value="oct">Oct</option>
                        <option value="nov">Nov</option>
                        <option value="dec">Dec</option>		
  
</select>
<select name="year" >
<option value="2018">2018</option>
						<option value="2019">2019</option>   
						<option value="2020">2020</option>   
						<option value="2021">2021</option>   
						<option value="2022">2022</option>   
						<option value="2023">2023</option>  
                        <option value="2024">2024</option>  
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>  
  
</select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="input-text" name="c_name" pattern="^[a-zA-Z]+$" placeholder="Name on card" required="">
                            </div>
                            <div class="form-group">
                               <input type="text" class="input-text" name="cvv" pattern="^\d{3}$" placeholder="cvv" required="">
                            </div>
                            <div class="form-group">
                            <select name="amount" >
<option value="1000">1000</option>
						
</select>
                            </div>
                            
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-block btn btn-color">Submit</button>
                            </div>
                        </form>
                         <div class="footer">
                        <a href="evbooknon.php" style="color:#FF0000">Not Now</a>
                    </div>
                        <!-- Social List -->
                       
                    </div>
                    <!-- Footer -->
                    
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
            
           
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>            </span>        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>            </span>        </a>    </div>
</div>
<!-- banner end -->


<!-- Blog start -->


<!-- Footer start -->


<!-- External JS libraries -->
<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.selectBox.js"></script>
<script src="assets/js/rangeslider.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/jquery.filterizr.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/backstretch.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/jquery.scrollUp.js"></script>
<script src="assets/js/particles.min.js"></script>
<script src="assets/js/typed.min.js"></script>
<script src="assets/js/jquery.mb.YTPlayer.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script src="assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="assets/js/app.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/themevessel-items/biznex/main/index.html by   [XR&CO'2014], Tue, 12 Feb 2019 05:06:55 GMT -->
</html>
<?php
}
else
{
header("location:../index.php");
}
?>
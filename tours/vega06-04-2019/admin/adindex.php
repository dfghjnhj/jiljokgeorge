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
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
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
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="adindex.php">
                        <h1><i>VEGA</i></h1>                  </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>                    </button>
                    <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="adindex.php"><br>Index</a>
                 
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="payment.php" ><br>Payment</a>
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="views.php"><br>View</a>
                            
                            <a class="btn btn-sm btn-white-sm-outline btn-round signup-link" href="image.php"><br>Image</a>
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
                                    
                                    <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
                                   
                                </ul>
                            </li>

                               
                        </ul>
                    </div>
                </nav>
            </div>
      </div>
    </div>
</header><!-- main header end -->

<!-- Banner start -->
<div class="banner banner-bg" id="particles-banner-wrapper">
    <div id="particles-banner"></div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item item-bg active">
                <div class="carousel-caption banner-slider-inner d-flex text-center">
                    <div class="carousel-content container">
                        <div class="text-c">
                            <h2 data-animation="animated fadeInDown delay-05s"><i>Winning isn’t everything, it’s the only thing.</i></h2>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex text-left">
                    <div class="carousel-content container">
                        <div class="text-l">
                            <h2 data-animation="animated fadeInDown delay-05s"><i>The key is not the will to win… everybody has that. It is the will to prepare to win that is important.<i></h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <div class="carousel-caption banner-slider-inner d-flex text-left">
                    <div class="carousel-content container">
                        <div class="text-r">
                            <h2 data-animation="animated fadeInDown delay-05s"><i>Show me a gracious loser and I’ll show you a failure</i></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
        </a>
    </div>
</div>
<!-- banner end -->


<!-- Blog start -->


<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            Address: 20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            Email: <a href="mailto:info@themevessel.com">info@themevessel.com</a>
                        </li>
                        <li>
                            Phone: <a href="tel:+0477-85x6-552">+XXXX XXXX XXX</a>
                        </li>
                        <li>
                            Fax: +XXXX XXXX XXX
                        </li>
                    </ul>
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Useful Links</h4>
                    <ul class="links">
                        <li>
                            <a href="about-1.html"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="services-1.html"><i class="fa fa-angle-right"></i>Service</a>
                        </li>
                        <li>
                            <a href="portfolio-3column.html"><i class="fa fa-angle-right"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="contact.html"><i class="fa fa-angle-right"></i>Contact</a>
                        </li>
                        <li>
                            <a href="blog-classic-sidebar-right.html"><i class="fa fa-angle-right"></i>Blog</a>
                        </li>
                        <li>
                            <a href="gallery-3column.html"><i class="fa fa-angle-right"></i>Gallery</a>
                        </li>
                        <li>
                            <a href="team.html"><i class="fa fa-angle-right"></i>Team</a>
                        </li>
                        <li>
                            <a href="pricing-tables-1.html"><i class="fa fa-angle-right"></i>Pricing Tables</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="recent-posts footer-item">
                    <h4>Recent Posts</h4>
                    <div class="media mb-4">
                        <a class="pr-3" href="portfolio-details.html">
                            <img src="assets/img/recent-portfolio/img-1.jpg" alt="recent-portfolio">
                        </a>
                        <div class="media-body align-self-center">
                            <p><a href="portfolio-details.html">Lectus tristique lacinia non in diam mauris ultricies rutrum mauris.</a></p>
                            <p><i class="fa fa-calendar"></i>27 Feb 2018</p>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a class="pr-3" href="portfolio-details.html">
                            <img src="assets/img/recent-portfolio/img-2.jpg" alt="recent-portfolio">
                        </a>
                        <div class="media-body align-self-center">
                            <p><a href="portfolio-details.html">Lectus tristique lacinia non in diam mauris ultricies rutrum mauris</a></p>
                            <p><i class="fa fa-calendar"></i>27 Feb 2018</p>
                        </div>
                    </div>
                    <div class="media">
                        <a class="pr-3" href="portfolio-details.html">
                            <img src="assets/img/recent-portfolio/img-3.jpg" alt="recent-portfolio">
                        </a>
                        <div class="media-body align-self-center">
                            <p><a href="portfolio-details.html">Lectus tristique lacinia non in diam mauris ultricies rutrum mauris</a></p>
                            <p><i class="fa fa-calendar"></i>27 Feb 2018</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <h4>Subscribe</h4>
                    <div class="Subscribe-box">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                        <form action="#" method="GET">
                            <p>
                                <input type="text" class="form-contact" name="email" placeholder="Enter Address">
                            </p>
                            <p>
                                <button type="submit" name="submitNewsletter" class="btn btn-block btn-color">
                                    Subscribe
                                </button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <p class="copy">&copy;  2019 <a href="http://themevessel.com/" target="_blank">Theme Vessel</a>. Trademarks and brands are the property of their respective owners.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
</div>

<!-- Off-canvas sidebar -->
<div class="off-canvas-sidebar">
    <div class="off-canvas-sidebar-wrapper">
        <div class="off-canvas-header">
            <a class="close-offcanvas" href="#"><span class="fa fa-times"></span></a>
        </div>
        <div class="off-canvas-content">
            <aside class="canvas-widget">
                <div class="logo text-center">
                    <img src="assets/img/logos/logo-white.png" alt="logo">
                </div>
            </aside>
            <aside class="canvas-widget">
                <ul class="menu">
                    <li class="menu-item menu-item-has-children"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="about.html">About Us</a></li>
                    <li class="menu-item"><a href="portfolio-3column.html">Portfolio</a></li>
                    <li class="menu-item"><a href="services.html">Services</a></li>
                    <li class="menu-item"><a href="team.html">Team</a></li>
                    <li class="menu-item"><a href="contact.html">Contact US</a></li>
                </ul>
            </aside>
            <aside class="canvas-widget">
                <ul class="social-icons">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                </ul>
            </aside>
        </div>
    </div>
</div>

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
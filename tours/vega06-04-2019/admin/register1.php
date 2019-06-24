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

<?php 

if(isset($_POST['id']))
{
	$uid=$_POST['id'];
	$block=$_POST['submit'];
	
	{
	
	$sql="select * from registration where email='$uid'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
if($rowcount!=0)
{	
		while($row=mysqli_fetch_array($res))
		{
			
			$who=$row['who'];
			$name=$row['name'];
			$gender=$row['gender'];
			$email=$row['email'];
			$address=$row['address'];
			$mobile=$row['mobile'];
		}
}



	?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-items/biznex/main/register.html by   [XR&CO'2014], Tue, 12 Feb 2019 05:07:14 GMT -->
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
<header class="main-header sticky-header" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="evindex.php">
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
</header>
<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div  style="color:#FFFFFF">
                        <!-- Logo -->
                        <br>
                        <br>
                        <br>
                        
                        <br>
                        <br>
                        <!-- Form start -->
 <form action="block.php" name="reg" method="POST">
 <h6>WHO</h6>
                           <div class="form-group">
                                <input type="text" name="who" disabled="disabled" class="input-text" value="<?php echo $who;?>" >
                            </div>
                            <h6>NAME</h6>
                            <div class="form-group">
                                <input type="text" name="name" disabled="disabled" class="input-text" value="<?php echo $name;?>" >
                            </div>
                             <h6>EMAIL</h6>
                            <div class="form-group">
                                <input type="text" name="email" disabled="disabled" class="input-text" value="<?php echo $email;?>" >
                            </div>
                           <h6>ADDRESS</h6>
                            <div class="form-group">
                            <textarea rows="4" cols="50" disabled="disabled" name="address" class="input-text" value="" ><?php echo $address;?></textarea>
                            </div>
                            <h6>GENDER</h6>
                           <div class="form-group">
                            <textarea rows="4" cols="50" disabled="disabled" name="gender" class="input-text" value="" ><?php echo $gender;?></textarea>
                            </div>
                           <h6>MOBILE</h6>
                            
                            <div class="form-group">
                                <input type="hidden" id="bid" name="block" value="<?php echo $uid ?>">
                                <input type="text" name="mobile" disabled="disabled" class="input-text" value="<?php echo $mobile;?>" >
                            </div>
                           
                           
                            <?php 
				$sql="SELECT * FROM login where email='$uid'";
			$result=mysqli_query($con,$sql);
			$row=mysqli_fetch_array($result);
			$block=$row['block'];
			if($block==1)
			{
				?>
				<input type="submit"  name="submit" value="block">
			<?php 
			}
			else
			{?>
            <input type="submit" name="submit" value="unblock">
			<?php 
			}
			?>
                        </form>
                        <!-- Social List -->
                       
                    </div>
                    <!-- Footer -->
                    
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="button" class="btn btn-sm btn-color">Search</button>
    </form>
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

<!-- Mirrored from storage.googleapis.com/themevessel-items/biznex/main/register.html by   [XR&CO'2014], Tue, 12 Feb 2019 05:07:14 GMT -->
</html>
<?php
	}
	}
	?>
	<?php
}
else
{
header("location:../index.php");
}
?>
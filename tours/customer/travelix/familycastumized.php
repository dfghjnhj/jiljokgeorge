<!DOCTYPE html>
<html lang="en">
<head>
<title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/oh-autoval-script.js"></script>
</head>

<body>
	

<div class="super_container">
	
	<!-- Header -->

	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+919961671081</div>
						<div class="social">
							
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
							<div class="user_box_register user_box_link"><a href="logout.php">logout</a></div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/about_background.jpg"></div>
		<div class="col-md-3">
        <form action="web/cfpayment.php" method="post" onsubmit="return" class="oh-autoval-form">
        <?php
								
                                $package=$_GET['name'];
                                $pakid=$_GET['id'];
                               ?>
       
        family member 1
        <input type="text"  name="m1" class="form-control av-name" av-message="only name" required="">
        family member 2
        <input type="text" name="m2" class="form-control av-name" av-message="only name" required="">
		family member 3
	    <input type="text" name="m3" class="form-control av-name" av-message="only name" required="">
	    family member4
		<input type="text" name="m4" class="form-control av-name" av-message="only name" required="">
        family member5
		<input type="text" name="m5" class="form-control av-name" av-message="only name" required="">
        Address
		<input type="text" name="maddress" class="form-control av-name" av-message="only name" required="">
		Phone
		<input type="text" name="phone" class="form-control av-mobile" av-message="Must contain 10 Digits (Does't contain alphabets) " required=""><br><br>
		                                
        <textarea rows="3" name="value" hidden><?php echo $package; ?></textarea>	
        <textarea rows="3" name="pakid" hidden><?php echo $pakid; ?></textarea>	
        
		<button type="submit" name="pay" class="btn-md btn-block btn btn-color">PAY NOW</button>
        </form>
		</div>
	</div>

	




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>
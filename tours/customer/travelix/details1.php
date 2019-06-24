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
						<div class="phone">Contact no:9961671081</div>
						
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
		<b><u>BOOKING INFORMATION<u><b><br>
        <form action="web/index3.php" method="post" onsubmit="return" class="oh-autoval-form">
						
		<?php
								
							     $idss=$_GET['id'];
								$fd=$_GET['fd'];
								$td=$_GET['td'];
								
                                ?>
                                							
		<textarea rows="3" name="value" hidden><?php echo $idss; ?></textarea>	
		<textarea rows="3" name="date" hidden><?php echo $fd; ?></textarea>			
		<textarea rows="3" name="todate" hidden><?php echo $td; ?></textarea>					
      <!--from
        <input type="date"  name="date"><br><br>
        to
        <input type="date" name="todate"><br><br>-->
		name 
	    <input type="text" name="name" class="form-control av-name" av-message="only name" required="">
		destination
		<input type="text" name="destination" class="form-control av-name" av-message="only character" required="" >
		Event
		<input type="text" name="event"  class="form-control av-name" av-message="only character"  required="">
		preference root
		<input type="text" name="root" class="form-control av-name" av-message="only character"  required="">
		arrivcal point
		<textarea rows="2" name="arrival" class="form-control av-name" av-message="only character"  required=""></textarea>
        phone
		<input type="text" name="phone" class="form-control av-mobile" av-message="Must contain 10 Digits (Does't contain alphabets) " required=""><br><br>
		<button type="submit" name="pay" class="btn-md btn-block btn btn-color">PAY NOW</button>
	
           
		</form>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>
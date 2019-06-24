<!DOCTYPE html>
<html lang="en">

<head>
	<title>Travelix</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Travelix Project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>
	<?php
	session_start();

	if (!isset($_SESSION['u_id']))
		header("location:../index.php");
	?>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->

			<div class="top_bar style=height:500px">
				<div class="container">
					<div class="row">
						<div class="col d-flex flex-row">
							<div class="phone">+9961671081</div>
							<!--<div class="social">
							<ul class="social_list">
								<li class="social_list_item"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</div>-->
							<div class="user_box ml-auto">
								<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
								<div class="user_box_register user_box_link"><a href="logout.php">log out</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Navigation -->



			<!-- Home -->


			<!-- Home Slider -->




	</div>


    <?php
																 $hotel=$_GET['hotel'];
																 $from=$_GET['from'];
																 $to=$_GET['to'];
																 $count=$_GET['count'];
																 
                                ?>


	<div class="col-lg-4 intro_col">
		<?php
		include("database.php");
	
		$sql = "SELECT * FROM `hoteldetails` where name='$hotel'";
		$result = mysqli_query($con, $sql);
        
		?>
		<?php
		$rowcount = 1;
		if ($rowcount != 0) {

			while ($row = mysqli_fetch_array($result)) {
				$hdid = $row['hdid'];
				$name = $row['name'];
				$address = $row['address'];
				$landmark = $row['landmark'];
				$city = $row['city'];
				$dr = $row['delux'];
				$dc = $row['deluxprice'];
				$di = $row['di'];

				$pr = $row['premium'];
				$pc = $row['premiumprice'];
				$br = $row['budget'];
				$bc = $row['budgetprice'];
				$bi = $row['bi'];
				$fa = $row['facilities'];
				$pi = $row['pi'];




				?>

			</div>
			</div>
			</div>

			<!-- Intro Item -->


			<!-- Intro Item -->

			<div class="container">
				<div class="row">
					<div class="col text-center">
					
						<div><button class="btn btn-success"><?php echo $city; ?><br>
						<?php echo $name . "  HOTEL"; ?><br>
								<?php echo $address; ?><br>
								<?php echo "LANDMARK:" . $landmark; ?></button></div>
					</div>
				</div>
				<div class="row offers_items">

					<!-- Offers Item -->
					<div class="col-lg-6 offers_col">
						<div class="offers_item">
							<div class="row">
								<div class="col-lg-6">
									<div class="offers_image_container">
										<!-- Image by https://unsplash.com/@kensuarez -->
										<div class="offers_image_background"><img src="../../hotel/dorne/<?php echo $di; ?>" width="250" height="250"></div>
										<div class="offer_name"><a href="#"><?php echo "DELUX ROOM"; ?></a></div>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="offers_content">
										<div class="offers_price"><?php echo "₹" . $dc; ?><span>per day</span></div>

									
										<p class="offers_text"><b><?php echo "FACILITIES   :" . $fa; ?></b>;</p>
										<!--<div class="offers_icons">
															<ul class="offers_icons_lis">
																<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
																<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
																<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
																<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
															</ul>
														</div><br>
														<!-- Trigger the modal with a button -->
														<button type="button" class="btn btn-warning" ><a href="search4.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=delux">Book</a></button>
														</div>

</div>
</div>
</div>
</div>
<div class="col-lg-6 offers_col">
				<div class="offers_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offers_image_container">
								<!-- Image by https://unsplash.com/@kensuarez -->
								<div class="offers_image_background"><img src="../../hotel/dorne/<?php echo $pi; ?>" width="250" height="250"></div>
								<div class="offer_name"><a href="#"><?php echo "PREMIUM  ROOM"; ?></a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offers_content">
								<div class="offers_price"><?php echo "₹" . $pc; ?><span>per day</span></div>
								
								<p class="offers_text"><b><?php echo "FACILITIES   :" . $fa; ?></b>;</p>


							</div><br>
							<button type="button" class="btn btn-warning" ><a href="search4.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=premium">Book</a></button>
							
							</div>
					</div>
				</div>
			</div>
			</div>
			<div class="col-lg-6 offers_col">
				<div class="offers_item">
					<div class="row">
						<div class="col-lg-6">
							<div class="offers_image_container">
								<!-- Image by https://unsplash.com/@kensuarez -->
								<div class="offers_image_background"><img src="../../hotel/dorne/<?php echo $bi; ?>" width="250" height="250"></div>
								<div class="offer_name"><a href="#"><?php echo "BUDGET ROOM"; ?></a></div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="offers_content">
								<div class="offers_price"><?php echo "₹" . $bc; ?><span>per day</span></div>
							
								<p class="offers_text"><b><?php echo "FACILITIES   :" . $fa; ?>;</b></p>



							</div><br>
							<button type="button" class="btn btn-warning" ><a href="search4.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=budget">Book</a></button>
							</div>
					</div>

				</div>
			</div>
			</div>
			</div>
		<?php
	}
}
?>


	<!-- Offers Item -->






	<!-- Testimonials Slider Nav - Prev -->
	<div class="test_slider_nav test_slider_prev">
		<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
			<defs>
				<linearGradient id='test_grad_prev'>
					<stop offset='0%' stop-color='#fa9e1b' />
					<stop offset='100%' stop-color='#8d4fff' />
				</linearGradient>
			</defs>
			<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z" />
			<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 " />
		</svg>
	</div>

	<!-- Testimonials Slider Nav - Next -->
	<div class="test_slider_nav test_slider_next">
		<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
			<defs>
				<linearGradient id='test_grad_next'>
					<stop offset='0%' stop-color='#fa9e1b' />
					<stop offset='100%' stop-color='#8d4fff' />
				</linearGradient>
			</defs>
			<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z" />
			<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 " />
		</svg>
	</div>

	</div>

	</div>
	</div>

	</div>
	</div>

	<div class="trending">
		<div class="container">
			<div class="row">

			</div>
			<div class="row trending_container">

			

				<script src="js/jquery-3.2.1.min.js"></script>
				<script src="styles/bootstrap4/popper.js"></script>
				<script src="styles/bootstrap4/bootstrap.min.js"></script>
				<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
				<script src="plugins/easing/easing.js"></script>
				<script src="js/custom.js"></script>
				<script>
					//ajax for room availability
					function checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, type, el) {
						$.ajax({
							url: 'amount.php',
							method: 'post',
							data: {
								'hid': <?php echo $hdid; ?>,
								'type': type,
								'count': count,
								'datefirst': dateFirst,
								'datesecond': dateSecond,
								'name': name,
								'addresss': addresss,
								'phone': phone
							},
							success: function(data) {
								if (data == 0) {
									//no rooms available
									$("#pay" + type).attr("disabled", "disabled");
									alert("no rooms available");
								} else {
									$("span" + el).html(data);
									$("input" + el).val(data);
									//here
									$("#pay" + type).removeAttr("disabled");
								}
							}
						});
					}

					$(document).ready(function() {
						//room type 
						$("#roomCount, #datefirst, #datesecond").on("change", function() {
							var dateFirst = $("#datefirst").val();
							var dateSecond = $("#datesecond").val();
							var count = $("#roomCount").val();
							var name = $("#name").val();
							var addresss = $("#addresss").val();
							var phone = $("#phone").val();
							if (dateFirst == "" || dateSecond == "") {
								// alert("select date");
								return;
							}
							checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, 'delux', '.priceOne');
						});

						//second modal
						$("#roomCountm, #datefirstm, #datesecondm").on("change", function() {
							var dateFirst = $("#datefirstm").val();
							var dateSecond = $("#datesecondm").val();
							var count = $("#roomCountm").val();
							var name = $("#namem").val();
							var addresss = $("#addresssm").val();
							var phone = $("#phonem").val();
							if (dateFirst == "" || dateSecond == "") {
								// alert("select date");
								return;
							}
							checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, 'premium', '.priceOnem');
						});
						$("#roomCountb, #datefirstb, #datesecondb").on("change", function() {
							var dateFirst = $("#datefirstb").val();
							var dateSecond = $("#datesecondb").val();
							var count = $("#roomCountb").val();
							var name = $("#nameb").val();
							var addresss = $("#addresssb").val();
							var phone = $("#phoneb").val();
							if (dateFirst == "" || dateSecond == "") {
								// alert("select date");
								return;
							}
							checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, 'budget', '.priceOneb');
						});


					});
				</script>
</body>

</html>
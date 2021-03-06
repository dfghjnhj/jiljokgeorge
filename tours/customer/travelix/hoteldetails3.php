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
														<button type="button" class="btn btn-warning" ><a href="searchhotelthree.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=delux">Book</a></button>
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
								<div class="offers_price"><?php echo "₹" . $pc; ?><span>per night</span></div>
								
								<p class="offers_text"><b><?php echo "FACILITIES   :" . $fa; ?></b>;</p>


							</div><br>
							<button type="button" class="btn btn-warning" ><a href="searchhotelthree.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=premium">Book</a></button>
							
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
							<button type="button" class="btn btn-warning" ><a href="searchhotelthree.php?id=<?php echo $hdid; ?> && name=<?php echo $name; ?> && type=budget">Book</a></button>
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

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">grand hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">queen hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<!--	<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="#">mars hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">madrid, spain</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="#" id="contact_form" class="contact_form">
							<input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

				<!--	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_content footer_about">
							<div class="logo_container footer_logo">
								<div class="logo"><a href="#"><img src="images/logo.png" alt="">travelix</a></div>
							</div>
							<p class="footer_about_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
							<ul class="footer_social_list">
								<li class="footer_social_item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li class="footer_social_item"><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">blog posts</div>
						<div class="footer_content footer_blog">
							
							<!-- Footer blog item -->
				<!--<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_1.jpg" alt="https://unsplash.com/@avidenov"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>
							
							<!-- Footer blog item -->
				<!--<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_2.jpg" alt="https://unsplash.com/@deannaritchie"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">New destinations for you</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

							<!-- Footer blog item -->
				<!--<div class="footer_blog_item clearfix">
								<div class="footer_blog_image"><img src="images/footer_blog_3.jpg" alt="https://unsplash.com/@bergeryap87"></div>
								<div class="footer_blog_content">
									<div class="footer_blog_title"><a href="blog.html">Travel with us this year</a></div>
									<div class="footer_blog_date">Nov 29, 2017</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">tags</div>
						<div class="footer_content footer_tags">
							<ul class="tags_list clearfix">
								<li class="tag_item"><a href="#">design</a></li>
								<li class="tag_item"><a href="#">fashion</a></li>
								<li class="tag_item"><a href="#">music</a></li>
								<li class="tag_item"><a href="#">video</a></li>
								<li class="tag_item"><a href="#">party</a></li>
								<li class="tag_item"><a href="#">photography</a></li>
								<li class="tag_item"><a href="#">adventure</a></li>
								<li class="tag_item"><a href="#">travel</a></li>
							</ul>
						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<!--<div class="col-lg-3 footer_column">
					<div class="footer_col">
						<div class="footer_title">contact info</div>
						<div class="footer_content footer_contact">
							<ul class="contact_info_list">
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
									<div class="contact_info_text">4127 Raoul Wallenber 45b-c Gibraltar</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
									<div class="contact_info_text">2556-808-8613</div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/message.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="mailto:contactme@gmail.com?Subject=Hello" target="_top">contactme@gmail.com</a></div>
								</li>
								<li class="contact_info_item d-flex flex-row">
									<div><div class="contact_info_icon"><img src="images/planet-earth.svg" alt=""></div></div>
									<div class="contact_info_text"><a href="https://colorlib.com">www.colorlib.com</a></div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- Copyright -->


				<!--	</div>
				</div>
				<div class="col-lg-9 order-lg-2 order-1">
					<div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
						<div class="footer_nav">
							<ul class="footer_nav_list">
								<li class="footer_nav_item"><a href="#">home</a></li>
								<li class="footer_nav_item"><a href="about.html">about us</a></li>
								<li class="footer_nav_item"><a href="offers.html">offers</a></li>
								<li class="footer_nav_item"><a href="blog.html">news</a></li>
								<li class="footer_nav_item"><a href="contact.html">contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>-->

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
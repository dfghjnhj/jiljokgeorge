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
	<script src="js/jquery-3.2.1.min.js"></script>
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
					<div class="row ">
						<div class="col d-flex flex-row style=height:500px">
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




	<div class="col-lg-4 intro_col">
	<?php
		include("database.php");
		$d1=$_POST["checkin"];
        $d2=$_POST["checkout"];
        $id=$_POST["id"];
        $name=$_POST["name"];
        $type=$_POST["delux"];
        $a=array();
        $b=array();
               
        $period = new DatePeriod(
           new DateTime($d1),
           new DateInterval('P1D'),
           new DateTime(date('Y-m-d', strtotime("+1 Day", strtotime($d2)))  )
                                         );



                 $i=0;
                 foreach ($period as $key => $value)
                  {
                      $flag=0;

                     $currDate = $value->format('Y-m-d') ;
            $a[$i]=$currDate;
            
           // $b[$i]=$this->Custmodel->datefromdatabase($hid,$hrmid,$currDate);
           $b[$i]=mysqli_fetch_array(mysqli_query($con,"select (SELECT `$type` as val1 FROM `hoteldetails` WHERE hdid='$id')-( SELECT IFNULL((SELECT sum(`wantedrooms`) as val2 FROM `tbl_roombook` WHERE hid='$id' and type='$type' and checkin <='$currDate' AND checkout >='$currDate' order by hid),0)) as rooms"));


            
                     
$i++;
	//  print_r($b);
	//print_r($a);                 
 }


            $i=0;
            foreach ($b as $row)    //resultinte ullil orupad values und

            {
							$c[$i] =$row;
              // foreach ($row as $row1)    //resultinte ullil orupad values und

              // {
             

            	// }
           		 $i++;
						}
						$i=0;
						foreach ($b as $row)    //resultinte ullil orupad values und

            {
							$b[$i] =$row['rooms'];
							
							$i++;
						}
						$s=$b[0];
            for ($i=0; $i <sizeof($a) ; $i++) {
							echo "<h3>".$a[$i]."   ----------------------      ".$b[$i]."<br>"."</h3>";
							if($b[$i] < $s)
                                                                          {
                                                                            $s=$b[$i];
                                                                          }
						}
			?>
			<form action="web/roompayment.php" method="post">
														<textarea rows="2" name="rtype" id="rtype" hidden><?php echo $type; ?></textarea>

														<textarea rows="2" name="hname" hidden> <?php echo $name; ?></textarea>

														<textarea rows="2" name="hid" hidden> 	 <?php echo $id; ?></textarea>
                       check in
						 <input type="date" name="datefirst" id="datefirst" required="" value="<?php echo $d1; ?>">
						 check out
						 <input type="date"  name="datesecond" id="datesecond" required="" value="<?php echo $d2; ?>">
						 p>Name</p>
																<input type="name" name="name" id="name" required="">
																<p>address</p>
																<textarea rows="2" name="addresss" id="addresss" required=""></textarea>
																<p>phone</p>
																<input type="name" name="phone" id="phone" required=""><br>
						 select no of rooms
						 <select class=""  name="type" id="roomCount">
                                            <option value="">Select number</option>
                                            <?php
                                            for($i=1;$i<=$s;$i++)
                                            {
                                              ?>
                                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php
                                            }
                                             ?>
										  </select>
										  <h4>Price: <span class="priceOne" name="amount"></span></h4>
																	<input type="text" name="amountss" class="priceOne" required> 
																	<button type="submit" name="pay" class="btn-md btn-block btn btn-color" name="submit" disabled id="paydelux">PAY</button>
										  <div class="container">
										  </div>
					</div>

				</div>
			</div>
		<?php
	

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
			<script>
			//ajax for room availability
					function checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, type, el) {
						$.ajax({
							url: 'amount.php',
							method: 'post',
							data: {
								'hid': <?php echo $id; ?>,
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
									$("#paydelux").attr("disabled", "disabled");
								
								} else {
									$("span" + el).html(data);
									$("input" + el).val(data);
									//here
									$("#paydelux").removeAttr("disabled");
								}
							}
						});
					}

					$(document).ready(function() {
					
						//room type 
						$("#roomCount").on("change", function() {
							
							var dateFirst = $("#datefirst").val();
							var dateSecond = $("#datesecond").val();
							var count = $("#roomCount").val();
							var name = $("#name").val();
							var addresss = $("#addresss").val();
							var phone = $("#phone").val();
							var type = $("#rtype").val();
							if (dateFirst == "" || dateSecond == "") {
								// alert("select date");
								return;
							}
							checkAvailability(dateFirst, dateSecond, count, name, addresss, phone, type, '.priceOne');
						});
					});
</script>

	
</body>

</html>
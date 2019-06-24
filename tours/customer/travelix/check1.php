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

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="phone">+9961671081</div>
						<div class="social">
						
						</div>
						<div class="user_box ml-auto">
							<div class="user_box_login user_box_link"><a href="index.php">home</a></div>
						
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Main Navigation -->

		
	</header>

	

	<!-- Home -->

	

	<!-- Offers -->

	<div class="offers">

		<!-- Search -->

		<div class="search">
			<div class="search_inner">

				<!-- Search Contents -->
				
				<div class="container fill_height no-padding">
					<div class="row fill_height no-margin">
						<div class="col fill_height no-padding">

							<!-- Search Tabs -->

							<div class="search_tabs_container">
								<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
									<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
									<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
								</div>		
							</div>

							<!-- Search Panel -->
                            <?php
		include("database.php");
		$d1=$_POST["checkin"];
        $d2=$_POST["checkout"];
        $id=$_POST["id"];
        $name=$_POST["name"];
				$type=$_POST["delux"];
				$count=$_POST["count"];
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
							
							<div class="search_panel active">
                            <form action="web/pay1.php" method="post">
									<div class="search_item">
										<div>check in</div>
										<input type="date" name="datefirst" id="datefirst" value="<?php echo $d1; ?>"  required="required">
									</div>
								
									<div class="extras">
										<div class="search_item">
										<div>check out</div>
										<input type="date" name="datesecond" id="datesecond"  value="<?php echo $d2; ?>" required="required">
                                    </div>
                                    <div class="extras">
										<div class="search_item">
										<div> rooms</div>
                                        <select class=""  name="type" id="roomCount">
                                            <option value="">Select rooms</option>
                                            <?php
                                            for($i=1;$i<=$s;$i++)
                                            {
                                              ?>
                                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                              <?php
                                            }
                                             ?>
										  </select>
                                    </div>
                                    <div class="extras">
										<div class="search_item">
										
                                        <div><h6><b>Price: <span class="priceOne" name="amount"></span></b><h6></div>
																	<input type="text" name="amountss" hidden class="priceOne" required> 
                                    </div>
										<div class="extras">
										<div class="search_item">
										<div>name</div>
										<input type="text"   name="name" id="name"  required="required">
									</div>
										<div class="extras">
										<div class="search_item">
										<div>address</div>
										<textarea rows="4"  name="addresss" id="addresss"  required="required"></textarea>
									</div>
									<div class="extras">
										<div class="search_item">
										<div>phone</div>
										<input type="text" name="phone" id="phone"  required="required">
                                    </div>
                                   

                                    <div class="extras">
										<div class="search_item">
										
                                        <textarea rows="2" name="rtype" id="rtype" hidden><?php echo $type; ?></textarea>
                                    </div>
                                    <div class="extras">
										<div class="search_item">
									
										<textarea rows="2" name="hname" hidden> <?php echo $name; ?></textarea>
                                    </div>
                                    <div class="extras">
										<div class="search_item">
										
                                        <textarea rows="2" name="hid" hidden> 	 <?php echo $id; ?></textarea>
									</div>
							
									</div>
									<button class="button search_button" name="pay" name="submit" disabled id="paydelux">pay<span></span><span></span><span></span></button>
								</form>
							</div>

							<!-- Search Panel -->

							
						</div>
					</div>
				</div>	
			</div>	
		</div>

		

						<!-- Offers Item -->

						
	<!-- Footer -->

	
	<!-- Copyright -->


<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
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
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
							<ul class="social_list">
								
								<li class="social_list_item"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
								<li class="social_list_item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
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
		<div class="home_content">
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
						 <input type="date"  name="datesecond" id="datesecond"  required="" value="<?php echo $d2; ?>">
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
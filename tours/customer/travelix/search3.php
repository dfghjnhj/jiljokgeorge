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
<script src="js/jquery-3.2.1.min.js"></script>
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
						<div class="phone">919961671081</div>
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
		<div class="home_content">
		<?php
		   $id=$_GET['id'];
		   $name=$_GET['name'];
			 $type=$_GET['type'];
		
        ?>
        <form action="check3.php" method="post">
		
									
									<div class="search_item">
										<textarea rows="2" name="id" hidden><?php echo $id; ?></textarea>
										<textarea rows="2" name="name" hidden><?php echo $name; ?></textarea>
										<textarea rows="2" name="delux" hidden><?php echo $type; ?></textarea>
										

										<div>check in
										<input type="date" name="checkin" id="from"  onchange="DateCheck()"  required=""><br><br>
									
									
										check out
										<input type="date" name="checkout" id="to"  onchange="DateCheck()"   required=""><br><br>
										
                                        <button class="button search_button">search<span></span><span></span><span></span></button>
									</div>
									
										
								
									
									</div>
									
										
									</div>
									
								</form>

	
								<script>
                          function DateCheck()
                    {
                      var StartDate= document.getElementById('from').value;
                      var EndDate= document.getElementById('to').value;
                      var eDate = new Date(EndDate);
                      var sDate = new Date(StartDate);
                      if(StartDate!= '' && EndDate!= '' && sDate > eDate)
                        {
                        
                        document.getElementById('to').value="";
                        return false;
                        }
                    }
                    </script>
                         <script>
                        $(function() {
                  $(document).ready(function () {

                  var todaysDate = new Date(); // Gets today's date
                    var year = todaysDate.getFullYear();                        // YYYY
                    var month = ("0" + (todaysDate.getMonth() + 1)).slice(-2);  // MM
                    var day = ("0" + todaysDate.getDate()).slice(-2);           // DD
                    var minDate = (year +"-"+ month +"-"+ day); // Results in "YYYY-MM-DD" for today's date 
                    $('#from').attr('min',minDate);
                    $('#to').attr('min',minDate);
                  });
                });

                </script>



<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>
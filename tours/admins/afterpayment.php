<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Shoppy an Admin Panel Category Flat Bootstrap Responsive Website Template | Grids :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
</head>
<body>
    <?php	
include("header.php");
?>
<?php
 include("database.php");
 

 if(isset($_POST["submit"]))
 {
	$userid=$_POST["uid"];
	$name=$_POST["name"];
	$from=$_POST["from"];
	$to=$_POST["to"];
	$destination=$_POST["destination"];
	$advance=$_POST["advance"];
	$bus=$_POST["bus"];
	$cost=$_POST["cost"];
	$distance=$_POST["distance"];
	$total=$_POST["tamnt"];

    $suc=mysqli_query($con,"INSERT INTO `tbl_bill`(`uid`,`person`,`fromd`,`tod`,`destination`,`type`,`bus`,`advance`,`cost`,`kilometer`,`total`) VALUES('$userid','$name','$from','$to','$destination','bus','$bus','$advance','$cost','$distance','$total')");



echo "<script>alert('report registered!');window.location.href='index.php';</script>";
 
 }
	
	?>
	
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="cols-grids panel-widget">
			<h2>USERS LIST</h2>
			
        <?php
           $id=$_GET['id'];
        ?>
        <?php
				include("database.php");
					$sql="SELECT * FROM `tbl_vehiclebooking` where vid='$id'";
					$result=mysqli_query($con,$sql);
					
                                ?>
                                <?php
                                	$rowcount=1;
		if($rowcount !=0 )
		
			{	$rc = 1;
				while($row=mysqli_fetch_array($result))
				{
					$uid=$row['uid'];
					$vid=$row['vid'];
					$bid=$row['bid'];
					
				
					$sqlone="SELECT * FROM `tbl_bus` where bid='$bid'";
					$resultone=mysqli_query($con,$sqlone);
					$d=mysqli_fetch_assoc($resultone);
					$bname=$d['bname'];
				
					$bprice=$d['bcoast'];
				
					$name=$row['name'];
					$from=$row['fromone'];
					$to=$row['toone'];
										$destination=$row['destination'];	
										
										$advance=$row['advance'];	
                    
				
                    		
                   
					
					?>
					
					
					
				
							
										 
					<table>
																	
																	 
																	
																	
																	
										
		
		
															</tr>
														 
														</tbody>
																					 
		
												</table>
					 
			<?php
					}
				
					}
				?> 
							
             
            <form action="#" method="post">
						<h5>PERSON ID           :<br>
						<input type="text" hidden name="uid" value="<?php echo $uid; ?>"><br><br>
							<h5>BOOKED PERSON     :<br>
							<input type="text" name="name" value="<?php echo $name; ?>" readonly><br><br>
							<h5>BOOKING FROM      :<br>
							<input type="text" name="from" value="<?php echo $from; ?>" readonly><br><br>
							<h5>BOOKING TO        :<br>
							<input type="text" name="to" value="<?php echo $to; ?>" readonly><br><br>
							<h5>DESTINATION       :<br>
							<input type="text" name="destination" value="<?php echo $destination; ?>" readonly>
							<h5>ADVANCE AMOUNT    :<h5>
								<textarea rows="2" name="advance" id="advance" readonly><?php echo $advance; ?></textarea><br>
							<h5>BUS NAME  :<br>
							<input type="text" name="bus" value="<?php echo $bname; ?>" readonly><br>
							<h5>COST PER KILOMETER   :<h5><br><br><br>
							<textarea rows="2" name="cost" id="cost" readonly>	<?php echo $bprice; ?></textarea><br>	
						
								<input type="text" placeholder="total kilometer" onchange="rate(this.value)" name="distance" id="distance"><br>
								<h5>TOTAL AMOUNT   :<br>
								<input type="text"  name="tamnt" id="tamnt"><br><br>
								<input type="submit"  name="submit" id="tamnt"><br>
								
				</div>
		  </div>
	 </div>	
	 
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
<!--slider menu-->
<div class="sidebar-menu">
		  			  
							<div class="menu">
								<ul id="menu" >
									<li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
								 
									<li><a href="#"><!--<i class="fa fa-envelope"></i>--><span>packages</span><span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
												<!--<li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>-->
												<li id="menu-academico-boletim" ><a href="addpackage.php">Add Package</a></li>
												<li id="menu-academico-boletim" ><a href="viewpackage.php">view packages</a></li>
											 </ul>
									</li>
									 <li><a href="#"><!--<i class="fa fa-cog"></i>--><span>Vehicles</span><span class="fa fa-angle-right" style="float: right"></span></a>
											<ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="vehicles.php">add rental vehicles</a></li>
												<li id="menu-academico-avaliacoes" ><a href="vehicles.php">view registerd vehicles</a></li>
											 <!-- <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>-->
											 </ul>
									 </li>
									 <li><a href="#"><span>add advertaisment</span><span class="fa fa-angle-right" style="float: right"></span></a>
										 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="blank.php">Add</a></li>
												
									 </li>
								</ul>
							</div>
				 </div>
				<div class="clearfix"> </div>
			</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
					</script>
<script>
	function rate(num)
	{
	var advance=parseInt(document.getElementById('advance').value);
	
	var cost=parseInt(document.getElementById('cost').value);
	var distance=parseInt(document.getElementById('distance').value);


  var result= cost * distance;
  var resultone= result - advance;
  document.getElementById('tamnt').value =resultone;
	}
	</script>


</body>
</html>

              

<!DOCTYPE html>
<html lang="zxx">
<?php 
session_start();
include ("../dbconnect.php");
$email=$_SESSION['email'];
$password=$_SESSION['password'];
$who=$_SESSION['who'];
$sql="select * from registration where email='$email'";
$res=mysqli_query($con,$sql);
$rowcount=mysqli_num_rows($res);
if($rowcount!=0)
{	
		while($row=mysqli_fetch_array($res))
		{
			
			$name=$row['name'];
			$address=$row['address'];
			$email=$row['email'];
			$gender=$row['gender'];
			$mobile=$row['mobile'];
			
		}
}



	?>
<!-- Mirrored from storage.googleapis.com/themevessel-items/biznex/main/register.html by   [XR&CO'2014], Tue, 12 Feb 2019 05:07:14 GMT -->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TAGCODE');</script>
    <!-- End Google Tag Manager -->
    <title>Vega</title>
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

<!-- Contact section start -->
<div class="contact-section overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo -->
                        <a href="evindex.php">
                           <h1><i>profile</i></h1>
                        </a>
                        <!-- Name -->
                       
                        <!-- Form start -->
                        <form action="actpro.php" name="reg" method="POST">
                           
                            <div class="form-group">
                                <input type="text" name="name" id="u" onchange='Validate();' class="input-text" value="<?php echo $name;?>" >
                            </div>
                            <script>		
function Validate() 
{
    var val = document.getElementById('u').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]/)) 
    {
        alert('Only alphabets are allowed');
		            document.getElementById('u').value = "";
        return false;
    }
	
    return true;
}
</script>
                            <div class="form-group">
                            <textarea rows="4" cols="50" name="address" class="input-text" value="" ><?php echo $address;?></textarea>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id='e' onchange='Validem();' class="input-text" value="<?php echo $email;?>" >
                            </div>
                            <script>		
function Validem() 
{
    var val = document.getElementById('e').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Incorrect Email');
		
		     document.getElementById('e').value = "";
        return false;
    }

    return true;
}

</script>
                            <div class="form-group">
                            <input type="radio" name="gender" value="<?php echo $gender;?>" checked> Male &nbsp; &nbsp;
                            <input type="radio" name="gender" value="<?php echo $gender;?>" /> Female
                            </div>
                            <div class="form-group">
                                <input type="text" name="mobile" id='c' maxlength="10" minlength="10" onchange='Validat();' class="input-text" value="<?php echo $mobile;?>" >
                            </div>
                            <script>		
function Validat() 
{
    var val = document.getElementById('c').value;

    if (!val.match(/^[7-9][0-9]{9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('c').value = "";
        return false;
    }

    return true;
}

</script>
                           
                            <div class="form-group mb-0">
                                <button type="submit" class="btn-md btn-block btn btn-color" value="UPDATE" name="update">UPDATE</button>
                          </div>
                        </form>
                       
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
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<?php
  include("header.php");
  ?>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php
  include("sidebar.php");
  ?>

    <!--main content start-->
    
    <<section id="main-content">
      <section class="wrapper">
      
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                REGISTRATIONS
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" id="feedback_form" method="get" action="">
                    <div class="form-group ">
                      <label for="cname" class="control-label col-lg-2">Select type <span class="required"></span></label>
                      <div class="col-lg-10">
                         <select>
                    <option value="individual">Individual</option>
                     <option value="honeymoon ">honeymoon</option>
             
                      
                       </select>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Package Name<span class="required"></span></label>
                      <div class="col-lg-10">
                        <input class="form-control " id="cemail" type="text" name="packagename" required />
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="curl" class="control-label col-lg-2">destinations</label>
                      <div class="col-lg-10">
                        <input class="form-control " id="curl" type="text" name="desinaions" required />
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Avilable seat</label>
                      <div class="col-lg-10">
                        <input class="form-control"  id="ccomment" type="text" name="seat" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">cost</label>
                      <div class="col-lg-10">
                       <input class="form-control"  id="ccomment" type="text" name="cost" required></textarea> 
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">Duration</label>
                      <div class="col-lg-10">
                        <input class="form-control"  id="ccomment" type="text" name="seat" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">date of jouney</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="datepicker" type="datepicker" name="date" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">time  of jounney</label>
                      <div class="col-lg-10">
                        <input class="form-control"  id="ccomment" type="text" name="seat" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">starting point</label>
                      <div class="col-lg-10">
                        <input class="form-control"  id="ccomment" type="text" name="sp" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">details of plan</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" type="text" name="plan" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
					 <label for="ccomment" class="control-label col-lg-2">offering facilities</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" type="text" name="plan" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
					 <label for="ccomment" class="control-label col-lg-2">other details</label>
                      <div class="col-lg-10">
                        <textarea class="form-control " id="ccomment" type="text" name="plan" required></textarea>
                      </div>
                    </div>
					<div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-2">image</label>
                      <div class="col-lg-10">
                        <input class="form-control"  id="ccomment" name="sp" type="file" required></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit">Save</button>
                        
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
          </div>
        </div>
       
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>

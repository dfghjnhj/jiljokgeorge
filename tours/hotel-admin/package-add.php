<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/package-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2019 03:41:18 GMT -->
<head>
    <title>Lava Material - Web Application and Website Multipurpose Admin Panel Template</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/oh-autoval-script.js"></script>
</head>


    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index.php" class="logo"><h4>HOTEL ADMIN<h4><a>
                </a>
            </div>
           
            <div  style='margin-left:900px;'class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='logout.php' data-activates='top-menu'>Log out<i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
               
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        
                        <li>
                            <h5>HOTEL <span> ADMIN</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div style='height:1000px' class="sb2-13">
                   <ul  class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                   
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-umbrella" aria-hidden="true"></i> HOTELS</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                   
                                    <li><a href="package-add.php">Add Hotels</a>
                                    </li>
                                    <li><a href="detailslist.php">hotel details</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                      
                    </ul>
                </div>
            </div>
            
            <div class="sb2-2">
                
                <body>

                <div class="sb2-2-add-blog sb2-2-1">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Add Hotel details</h4>
                          
                        </div>
                        <div class="bor">
                        
                        <form action="action.php" method="POST" enctype="multipart/form-data">
                     
                                <div class="row">
                                    <div class="input-field col s12">
                    <input id="list-name" type="text"  name="name" class=" form-control av-name" av-message="only name" placeholder="hotel name" required="">
                                        
                                    </div>
                                    <div class="input-field col s3">
                                        <select name="country"  id="country" required="required" palceholder="Your Country" class="form-control"  required="">
                                            <?php
                                            $con = mysqli_connect("localhost","root","","mainprojectdb");
                                            if (!$con) {
                                                echo 'could not connect....Try again!';
                                            } else {
                                                $sql = "select cid,cname from tbl_country where status=1";
                                                $result = mysqli_query($con, $sql);
                                                echo "<option value=>select country</option>";
                                                while ($row = mysqli_fetch_array($result)) {
                                                    $cnme = $row['cname'];
                                                    $cid = $row['cid'];
                                                    echo "<option value='$cid'>$cnme</option>";
                                                }
                                            }
                                            mysqli_close($con);
                                            ?>
                                        </select>
                                        
                                        <script>
                    
                                            $("#country").on("change", function () {
                                               
                                                $("#state").html("");
                                                $cnme = $("#country").val();
                                            
                                                // find courselevels
                                                $.ajax({
                                                    url: 'component/data.php',
                                                    method: 'POST',
                                                    data: {'country': $cnme, "status": "1"},
                                                    success: function (data)
                                                    {
                                                      
                                                        // console.log(data);
                                                        $("#state").html(data);
                                                    }
                                                });
                                            });
                    
                                            
                    
                                        </script> 
                                        
                    </div>
                    <div class="input-field col s3">        
                    <select name="state" id="state" required=""  palceholder="Your State"  class="form-control"  required=""></select>
                    </div>
                    <script >
                    $("#state").on("change", function () {
                            $("#dist").html("");
                            $snme = $("#state").val();

                            // find courselevels
                            $.ajax({
                                url: 'component/datas.php',
                                method: 'POST',
                                data: {'state': $snme, "status": "1"},
                                success: function (data)
                                {
                                    // console.log(data);
                                    $("#dist").html(data);
                                }
                            });
                        });
                    </script>
                    <div class="input-field col s3">            
                    <select name="dist" id="dist" required=""  palceholder="Your District"  class="form-control"  required=""></select></div>
                    <div class="input-field col s3">
                                    <input id="list-name" type="text" name="city" placeholder="city">
                                   
                                    
                                    </div>
                                    </div><br><br>
                                   <div class="row">
                                    <div class="input-field col s12">
              <input id="list-name" type="text" class="validate" name="address" placeholder="address">
                                              
                                    <div class="row">
                                    <div class="input-field col s12">
                 <input id="list-name" type="text" class="validate" name="landmark" class=" form-control av-name" av-message="only characters"  placeholder="landmark">
                                               
                                    </div>
                                    <div class="row">
                                    <div class="input-field col s2">
                              <input id="list-name" type="text" name="de"  class=" form-control av-posnumber"  av-message="number"   placeholder="no of Delux rooms">
                                    
                                    
                                    </div>
                                    <div class="input-field col s3">
                              <input id="list-name" type="text" name="dc"  class=" form-control av-posnumber"  av-message="number"    placeholder="coast per night">
                                   
                                    
                                    </div>
                                    <div class="input-field col s3">
                                    <input id="list-name" type="text" name="fa" class=" form-control av-name" av-message="only chracters"  placeholder="facilities" required="">
                                  
                                    
                                    </div>
                                    <div class="input-field col s3">
                                    <input type="file" name="dimage" class=" form-control av-image" av-message="only image" required="">
                                   
                                    
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="input-field col s2">
                           <input id="list-name" type="text" name="pr"  class=" form-control av-posnumber"  av-message="number"    placeholder="no of premium rooms">
                                  
                                    
                                    </div>
                                    <div class="input-field col s3">
                             <input id="list-name" type="text" name="pc"  class=" form-control av-posnumber"  av-message="number"    placeholder="coast per night">
                                 
                                    
                                    </div>
                                    <div class="input-field col s3">
                                    <input id="list-name" type="text" name="fac" class=" form-control av-name" av-message="only chracters"  p  placeholder="facilities" required="">
                                  
                                    </div>
                                    <div class="input-field col s3">
                                    <input type="file" name="pimage" class=" form-control av-image" av-message="only image" required="">
                                   
                                    
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s2">
                          <input id="list-name" type="text" name="bu"  class=" form-control av-posnumber"  av-message="number"    placeholder="no of budget rooms"> 
                                    
                                    
                                    </div>
                                    <div class="input-field col s3">
                           <input id="list-name" type="text" name="bc"  class=" form-control av-posnumber"  av-message="number"    placeholder="Cost per night">
                                   
                                    </div>
                                    <div class="input-field col s3">
                             <input id="list-name" type="text" name="faci" class=" form-control av-name" av-message="only chracters"   placeholder="facilities"  required=""> 
                              
                                    
                                    </div>
                                    <div class="input-field col s3">
                                    <input type="file" name="bimage" class=" form-control av-image" av-message="only image" required="">
                                   
                                    
                                    </div>
                                </div>
                                    
                               
                               
                             
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" name="submit" class="waves-effect waves-light btn-large" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <!-- <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div> -->
    </section>

    <!--======== SCRIPT FILES =========-->
  
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/materialize.min.js"></script> -->
    <script src="js/custom.js"></script>
</body>


<!-- Mirrored from rn53themes.net/themes/demo/lava-admin/package-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 10 Apr 2019 03:41:18 GMT -->
</html>
<!--slider menu-->
<<div class="sidebar-menu">
		  			  
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
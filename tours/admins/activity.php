<?php
include("database.php");
    if(isset($_POST["submit"]))
    {
        // print_r($_POST);
        $pakgei = $_POST['getid'];
        $packageseat=$_POST['getseat'];
        switch($_POST['days']){
            case '1':
            $dayone=$_POST["dayone-1"];
            $dayoneacco=$_POST["cco"];
            $onehotel=$_POST["country"];
          $from=$_POST["from"];  
            $to=$_POST["to"];
            //$query = "INSERT INTO `tbl_status`(`pid`,`from`,`to`,`ho`,`seat`,`status`) VALUES('$pakgei','$from','$to','$onehotel','$packageseat',0)";
             $query = "INSERT INTO `tbl_dayactivity`(`pid`,`one`,`oneac`,`ho`,`fromdate`,`todate`) VALUES('$pakgei','$dayone','$dayoneacco','$onehotel','$from','$to')";
             header("location:viewpak.php");
            break;
            case '2':
            $dayonetwo=$_POST["dayonetwo"];
            $dayoneacco=$_POST["dayoneacco"];
            $fr=$_POST["fr"];  
            $t=$_POST["t"];  
            $onehot=$_POST['co'];
            $daytwotwo=$_POST["daytwotwo"];
            $daytwoacco=$_POST["daytwoacco"];
            $twohot=$_POST["countr"];
            $fro=$_POST["fro"]; 
            $too=$_POST["too"];   

            $query = "INSERT INTO `tbl_dayactivity`(`pid`,`one`,`oneac`,`ho`,`fromdate`,`todate`,`two`,`twoac`,`th`,`fr`,`todatetwo`) VALUES('$pakgei','$dayonetwo','$dayoneacco','$onehot','$fr','$t','$daytwotwo','$daytwoacco','$twohot','$fro','$too')";
            header("location:viewpak.php");
            break;
            case '3':
            $onedaythree=$_POST["onedaythree"];
            $onedaythreeacco=$_POST["onedaythreeacco"];
            $a=$_POST["a"];
            $b=$_POST["b"];
            $c=$_POST["c"];
            $twodaythree=$_POST["twodaythree"];
             $twodaythreeacco=$_POST["twodaythreeacco"];
             $f=$_POST["f"];
             $d=$_POST["d"];
             $e=$_POST["e"];
             $threedaythree=$_POST["threedaythree"];
             $threedaythreeacco=$_POST["threedaythreeacco"];
             $i=$_POST["i"];
             $g=$_POST["g"];
             $h=$_POST["h"];
            $query = "INSERT INTO `tbl_dayactivity`(`pid`,`one`,`oneac`,`ho`,`fromdate`,`todate`,`two`,`twoac`,`th`,`fr`,`todatetwo`,`three`,`threeac`,`thrh`,`threefrom`,`threetwo`) VALUES('$pakgei',' $onedaythree','$onedaythreeacco','$c','$a','$b',' $twodaythree',' $twodaythreeacco','$f','$d','$e',' $threedaythree','$threedaythreeacco','$i','$g','$h')";
            header("location:viewpak.php");
            break;
            case '4':
            $odf=$_POST["odf"];
            $odfa=$_POST["odfa"];
            $j=$_POST["j"];
            $k=$_POST["k"];
            $l=$_POST["l"];
            $tdf=$_POST["tdfa"];
             $tdfa=$_POST["tdfa"];
             $m=$_POST["m"];
             $n=$_POST["n"];
             $o=$_POST["o"];
             $thdf=$_POST["thdf"];
             $thdfa=$_POST["thdfa"];
             $p=$_POST["p"];
             $q=$_POST["q"];
             $r=$_POST["r"];
             $fdf=$_POST["fdf"];
             $fdfa=$_POST["fdfa"];
             $s=$_POST["s"];
             $tt=$_POST["tt"];
             $u=$_POST["u"];
            $query = "INSERT INTO `tbl_dayactivity`(`pid`,`one`,`oneac`,`ho`,`fromdate`,`todate`,`two`,`twoac`,`th`,`fr`,`todatetwo`,`three`,`threeac`,`thrh`,`threefrom`,`threetwo`,`four`,`fourac`,`fh`,`fourfrom`,`fourto`) VALUES('$pakgei',' $odf','$odfa','$l','$j','$k',' $tdf',' $tdfa','$o','$m','$n','$thdf','$thdfa','$r','$p','$q','$fdf','$fdfa','$u','$s','$tt')";
            header("location:viewpak.php");
            break;
         
        }
        
       $suc=mysqli_query($con, $query);
   
          
    }
       ?>
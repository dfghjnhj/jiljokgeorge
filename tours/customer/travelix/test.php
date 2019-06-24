<?php
include("database.php");

?>
<form action="#">

<!-- <input type="hidden" name="hotelid" value="<?php echo $hid; ?>">

<input type="hidden" name="hotelrmid" value="<?php echo $hrmid; ?>">

<input type="hidden" name="logid" value="  <?php echo $logid; ?>">

<input type="hidden" name="roomrate" value="  <?php echo $roomrate; ?>"> -->



    <i><h1><b>CHECK YOUR ROOM!</h1></b></i>
    <div class="form-group">
                

                    <input type="date" id="txtFrom" name="txtFrom" placeholder="To date" required>
            


                    <input type="date" id="txtTo" name="txtTo"  placeholder="From date" required>
                    
                <button type="submit" id="check" name="check" >check room</button>
                
</div>

</form>
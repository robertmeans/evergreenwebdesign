<div id="draft_navigation">
<form name="form">
<div>
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc"  onClick="go('log.php');"<?php if ($thisPage=="log") echo "checked"; else { echo ""; }?>><br>Log</label>
    </div>
        
<!-------------------------------------------------------------------------------------------------------------------------------- Begin navigation -->
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index.php');" <?php if ($thisPage=="index01") echo "checked"; else { echo ""; }?>><br>01</label>
    </div>
   
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index02.php');" <?php if ($thisPage=="index02") echo "checked"; else { echo ""; }?>><br>02</label>
    </div>
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index03.php');" <?php if ($thisPage=="index03") echo "checked"; else { echo ""; }?>><br>03</label>
    </div> 
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index04.php');" <?php if ($thisPage=="index04") echo "checked"; else { echo ""; }?>><br>04</label>
    </div> 
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index05.php');" <?php if ($thisPage=="index05") echo "checked"; else { echo ""; }?>><br>05</label>
    </div> 
    
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('index06.php');" <?php if ($thisPage=="index06") echo "checked"; else { echo ""; }?>><br>06</label>
    </div>    
    
    
    
    
<!--        
*** remember to un-comment .draft_nav_option:last-child in css when you're ready to post the beta site ***
-->
    <div class="draft_nav_option">
    	<label><input type="radio" name="loc" onClick="go('../beta/');" <?php if ($thisPage=="beta") echo "checked"; else { echo ""; }?>><br>Beta</label>
    </div>


	
</div> 
</form>       
</div><!-- #draft_navigation -->









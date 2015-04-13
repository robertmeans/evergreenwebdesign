<?php require_once('_includes/popup-contactform.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Robert Means</title>
  <link rel="icon" type="image/ico" href="_images/favicon.ico">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="_scripts/coolclock-breakpoints.js?<?php echo time(); ?>"></script>
  <link rel="stylesheet" href="_css/style.css?<?php echo time(); ?>">
  <script src="_scripts/modernizr.js?<?php echo time(); ?>"></script> 
</head>

<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<div id="top-of-page"></div>
<div id="wrapper">

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<header id="intro">
<a class="mobile_menu"></a>
<nav id="mainNav">
	<div id="center-nav">
	<h2>Site Navigation</h2>
	<ul>
		<li><a href="#" class="first-nav-item no-active-nav back-to-top2"><i class="fa fa-angle-up"></i></a></li>
		<li><a href="#div-two" class="placeholder">services</a></li>
		<li><a href="#div-three" class="placeholder">about</a></li>
		<li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");' class="last-nav-item">contact</a></li>
		<li><a class="first-nav-item no-active-nav large-screen-gone mobile_menu2"><i class="fa fa-times-circle"></i></a></li>
	</ul>
	</div>
</nav>



<div id="bg-div-one">
	<img src="_images/sky.jpg" alt="blue sky">
</div>
<section id="div-one">

<div id="clockScene">
	<div class="text-box cf">
	<canvas id="clockid" class="CoolClock"></canvas>
	
	<h3>
		<script>
	    var greeting = new Date()
	    var hours = greeting.getHours()
	    
	    if (hours >= 5 && hours <= 11) //5a - 11a
	    document.write('Good morning,')
	    else if (hours >= 12 && hours <= 16) //noon - 4p
	    document.write('Good afternoon,')
		else if (hours >= 17 && hours <= 18) //5p - 6p
	    document.write('Good (late) afternoon,')
	    else if (hours >= 19 && hours <= 23) //7p - 11p
	    document.write('Good evening,')
	    else //12a - 4a
	    document.write('You sure are up late.')
	    </script>
    </h3>

    <p><span id="time"></span> on a <span id="day"></span> is the perfect time to <a class="hmpg-contact" href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>contact</a> Bob and discover how pain free your website project can be.</p>
    <p>With options to suit your vision, budget and time frame there's no better time than now to take that next step.</p>

	</div>

	<article id="nameScene">
	  <div id="my-name">
	    <h1>Robert Means</h1>
	    <div class="website-solutions-badge">
		    <h2>Website Solutions</h2>
		    <h4>Evergreen, Colorado</h4>
		    </div>
	    <div id="scrollDownSprite"><a href="#div-two" class="no-active-nav"></a></div>
	  </div><!-- name -->
	</article>

</div><!-- #clockScene -->
	
</section><!-- #div-one -->

</header>

<section id="div-two">
	<div class="tabs">
	    <ul class="tab-links">
	        <li class="active"><a href="#tab1" class="static"><i class="fa fa-eye"></i> <span class="mobile-gone">Overview</span></a></li>
	        <li><a href="#tab2" class="static"><i class="fa fa-desktop desktop-only"></i> <span class="mobile-gone">Websites</span></a></li>
	        <li><a href="#tab3" class="static"><i class="fa fa-film"></i> <span class="mobile-gone">Video</span></a></li>
	        <li><a href="#tab4" class="static"><span class="pad">$ ?</span></a></li>
	        <!-- <li><a href="#tab4" class="static">Tab 4</a></li> -->
	    </ul>	

	<div class="tab-content">

        <div id="tab1" class="tab active cf"><!-- Overview tab -->
        	<h2 class="mobile">Overview</h2>
            <p>At the risk of limiting my services to websites I should point out that Website Solutions loosly translates to any computer related task you can't do, don't have time to do or don't want to do.</p>
            <p>Past projects include:</p>
            <ul class="past-projects">
            	<li>one</li>
            	<li>two</li>
            	<li>three</li>
            	<li>four</li>
            </ul>

        </div>

	  	<div id="tab2" class="tab cf"><!-- Websites tab -->
	  	<h2 class="mobile">Websites</h2>
	  		<p>A custom website can help rediscover your business image in the Internet marketplace.</p>
	  		<p>With Internet traffic shifting towards mobile phone use, one cannot afford to have an online presence without a strong mobile interface.</p>
	  		<p>Utilizing the latest specifications in HTML5, CSS3 and jQuery with a focus on viewport-independent, fluid design you can rest assured your your site looks great and functions flawlessly no matter how your visitors get there.</p>
		</div>

		<div id="tab3" class="tab cf"><!-- Video tab -->
		<h2 class="mobile">Video</h2>
			<p>Admitidly I'm a bit of a goof without a bit of shame but behind the fun I have with my camera and editing equipment lies a service that can be utilized in a number of ways including:</p>
		  	<ul>
			<li>Audio editing</li>
			<li>Video editing</li>
			<li>Video montage</li>
			<li>Audio extraction</li>
			<li>Presentations</li>
			</ul>
		</div>

		<div id="tab4" class="tab cf"><!-- $? tab -->
			<p>As a freelance Web Developer I work for chump change and I have more solutions than you have problems. Please feel free to do us both a favor and abuse this opportunity!</p>
		</div>

	</div>

	</div><!-- .tabs -->



<div id="accordion">
  <h3 class="accClicked">Website Samples</h3>
  <div class="accordion-bkg">
    <ul id="list" class="cf">
    	<li>
    		<a href="http://www.mbeachlegal.com" target="_blank"><img src="_images/mbeachlegal-website.jpg" alt="Matthew Beach ESQ, LLC"></a>
    		<h3>Matthew Beach ESQ, LLC</h3>
    		<p>Local attorney who promotes all along the Front Range.</p>
    	</li>
    	<li>
    		<a href="http://www.evergreensigns.com" target="_blank"><img src="_images/evergreen-signs-website.jpg" alt="Evergreen Signs Website"></a>
    		<h3>Evergreen Signs</h3>
    		<p>Evergreen Signs designs and builds advertising in various mediums. With a mobile-optimized website they are now reaching more customers than ever.</p>
    		
    	</li>
    	<li>
    		<a href="http://www.evergreenwildernessguides.com" target="_blank"><img src="_images/evergreen-wilderness-guides-website.jpg" alt="Evergreen Wilderness Guides"></a>
    		<h3>Evergreen Wilderness Guides</h3>
    		<p>Evergreen Wilderness Guides provides outdoor instruction with courses ranging from rock climbing to mountain biking to survival skills.</p>
    		
    	</li>
    	<li>
    		<a href="http://www.wildflowerevergreen.com" target="_blank"><img src="_images/wildflower-website.jpg" alt="Wildflower Café"></a>
    		<h3>The Wildflower Café</h3>
    		<p>Located in historic downtown Evergreen, Colorado, The Wildflower Café has a menu that brings folks in from miles around.</p>
    		
    	</li> 
    	<li>
    		<a href="http://www.colt-green.com" target="_blank"><img src="_images/colt-green-website.jpg" alt="Colt Green Construction"></a>
    		<h3>Colt Green Construction</h3>
    		<p>Need to find something to say about all of these that's sort of neutral or something.</p>
    		
    	</li> 
    	<li>
    		<a href="http://www.myscreenscene.com" target="_blank"><img src="_images/myscreenscene-website.jpg" alt="MyScreenScene.com"></a>
    		<h3>MyScreenScene</h3>
    		<p>This is a browser utility I created using PHP &amp; mySQL that should revolutionize the world! ...Or at least be incredibly useful.</p>
    		
    	</li>    	
    </ul>
  </div>
  <h3 class="accClicked">Video Fun</h3>
  <div class="accordion-bkg">
    <p>
    Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
    purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
    velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
    suscipit faucibus urna.
    </p>
  </div>
</div><!-- #accordion -->

</section><!-- #div-two -->



<article id="div-three"><!-- begin .backstretch -->
    <div class="row text-center">
	
      	<div id="process_slider" class="flexslider_process">
          <ul class="slides">
            
            <li data-thumb="_images/step-01.png">
            	<div class="slide_content">
                <div class="slide_title">Blueprint</div>
                <div class="slide_text">
                  I research user expectations and target common use cases, developing a clear sitemap and user flow for intuitive engagement within your custom design.
                </div>
              </div><!-- /slide_content -->
            </li>
            
            <li data-thumb="_images/step-02.png">
            	<div class="slide_content">
                <div class="slide_title">Design <span class="plus">+</span>  Create</div>
                <div class="slide_text">
                  During this phase, I focus on brand experience, content engagement and creative expression through custom design. I
                  work with clients to create an end result that both sides will be proud of.
                 <!-- /from  BuiltbyBuffalo: "We don't provide multiple concepts from the outset as we believe it dilutes ideas - we prefer to focus on what we feel is the right approach." -->

                </div>
              </div><!-- /slide_content -->
            </li>
            
            <li data-thumb="_images/step-03.png">
            	<div class="slide_content">
                <div class="slide_title">Develop <span class="plus">+</span>  Deploy</div>
                <div class="slide_text">
                  Using the most appropriate technologies and interactive elements, I build standards-compliant, cross-platform websites and apps that are a pixel-perfect match to the design phase mockups. 
                </div>
              </div><!-- /slide_content -->
            </li>
            
            <li data-thumb="_images/step-04.png">
            	<div class="slide_content">
                <div class="slide_title">Relax</div>
                <div class="slide_text">
                  You can feel confident your project is in the right hands along with the peace of mind that comes with having your own personal support specialist on call.
                  
                </div>
              </div><!-- /slide_content -->
            </li>
            
            <li data-thumb="_images/step-05.png">
            	<div class="slide_content">
                <div class="slide_title">Brainstorm Ideas</div>
                <div class="slide_text">
                 Each project begins by identifying objectives and tastes in order to customize an interactive experience tailored to your specific needs.
                </div>
              </div><!-- /slide_content -->
            </li>
            
          </ul><!-- .slides -->
        </div><!-- #process_slider .flexslider_process -->


      
    </div> <!-- #row .text-center -->
</article><!-- #div-three -->




</div><!-- #wrapper -->
<?php include "_includes/footer.php" ?>

<?php require_once('_includes/contactform-code.php'); ?>

<script type="text/javascript" src="_scripts/jquery.backstretch.min.js"></script>


<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
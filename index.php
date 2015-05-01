<?php require_once('_includes/popup-contactform.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Evergreen Web Design - Website Development Evergreen, Colorado</title>
  <link rel="icon" type="image/ico" href="_images/favicon.ico">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="_scripts/coolclock-breakpoints.js?<?php echo time(); ?>"></script>
  <link rel="stylesheet" href="_css/style.css?<?php echo time(); ?>">
  <script src="_scripts/modernizr.js?<?php echo time(); ?>"></script> 

<!-- Google Analytics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-38678515-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end Google Analytics code -->

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

    <p><span id="time"></span> on a <span id="day"></span> is the perfect time to <a class="hmpg-contact" href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>contact</a> Evergreen Web Design and discover how pain free your website project can be.</p>
    <p>With options to suit your vision, budget and deadline, the solution to your online needs is right here.</p>

  </div>

  <article id="nameScene">
    <div id="EWD">
      <h1>Evergreen Web<br class="gone"> Design</h1>
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
          <li><a href="#tab4" class="static"><span class="pad">$ ?</span></a></li>
          <!-- <li><a href="#tab4" class="static">Tab 4</a></li> -->
      </ul> 

  <div class="tab-content">

        <div id="tab1" class="tab active cf"><!-- Overview tab -->
          <h2 class="mobile">Overview</h2>
            <p>At the risk of limiting the available services to websites it should be noted that Website Solutions loosly translates to any computer related task you can't do, don't have time to do or don't want to do.</p>
            <p>Past projects, aside from website concept, design &amp; development include:</p>
            <div class="project-col">
              <ul class="past-projects">
                <li>Editing video testimony for court trial</li>
                <li>Editing audio testimony</li>
                <li>Illustrations</li>
                <li>Scanning and cataloging</li>
                <li>Creating banner ads</li>
                <li>Designing &amp; authoring technical instructions</li>
              </ul>
              </div>

              <div class="project-col">
              <ul class="past-projects second-column">
                <li>Automating data entry tasks</li>
                <li>Designing restaurant menus</li>
                <li>Technical support</li>
                <li>Developing online shopping cart</li>
                <li>Preparing newsletters</li>
                <li>Photographing &amp; cataloging inventory</li>
              </ul>
              </div>

        </div>

      <div id="tab2" class="tab cf"><!-- Websites tab -->
      <h2 class="mobile">Websites</h2>
        <p>A custom website can help rediscover your business image in the Internet marketplace.</p>
        <p>With Internet traffic shifting towards mobile phone use, you can't afford to have an online presence without a strong mobile interface.</p>
        <p>Utilizing the latest specifications in HTML5, CSS3 and jQuery with a focus on viewport-independent, fluid design, you can rest assured your your site looks great and functions flawlessly no matter how your visitors get there.</p>

    <ul class="list moresites cf">
      <li>
        <a href="http://www.mbeachlegal.com" target="_blank"><img src="_images/mbeachlegal-website.jpg" alt="Matthew Beach ESQ, LLC"></a>
        <h3>Matthew Beach ESQ, LLC</h3>
        <p>Trial attorney practicing along the Front Range of Colorado.</p>
      </li>
      <li>
        <a href="http://www.evergreensigns.com" target="_blank"><img src="_images/evergreen-signs-website.jpg" alt="Evergreen Signs Website"></a>
        <h3>Evergreen Signs</h3>
        <p>Advertising in various mediums. With a mobile-optimized website they are now reaching more customers than ever.</p>
        
      </li>
      <li>
        <a href="http://www.evergreenwildernessguides.com" target="_blank"><img src="_images/evergreen-wilderness-guides-website.jpg" alt="Evergreen Wilderness Guides"></a>
        <h3>Evergreen Wilderness Guides</h3>
        <p>Outdoor instruction with courses ranging from rock climbing to mountain biking to survival skills.</p>
        
      </li>
      <li>
        <a href="http://www.wildflowerevergreen.com" target="_blank"><img src="_images/wildflower-website.jpg" alt="Wildflower Café"></a>
        <h3>The Wildflower Café</h3>
        <p>Located in historic downtown Evergreen, Colorado with a menu that brings folks in from miles around.</p>
        
      </li> 
      <li>
        <a href="http://www.colt-green.com" target="_blank"><img src="_images/colt-green-website.jpg" alt="Colt Green Construction"></a>
        <h3>Colt Green Construction</h3>
        <p>Construction and project management company, Jacksonville, Florida</p>
        
      </li> 
      <li>
        <a href="http://www.myscreenscene.com" target="_blank"><img src="_images/myscreenscene-website.jpg" alt="MyScreenScene.com"></a>
        <h3>MyScreenScene</h3>
        <p>This is a browser utility I created using PHP &amp; mySQL that should revolutionize the world! ...Or at least be incredibly useful.</p>
        
      </li>     
    </ul><!-- .list .moresites .cf -->

    <div class="centerDisplay">
    <button id="toggleMoreSites">Show more websites</button>
    </div><!-- .centerDisplay -->

    <div id="addSites01">
      <h2>Static Website Samples</h2>
        <p>The sites below reflect an era before fluid/responsive design was a thing. While these examples do not play well with mobile devices you can still appreciate the attention to detail reflected in each unique design and content management.</p>

    <ul class="list moresites staticsites cf">
      <li>
        <a href="http://www.robertmeans.com/fhl" target="_blank"><img src="_images/fhl-website.jpg" alt="Forest Heights Lodge"></a>
        <h3>Forest Heights Lodge</h3>
        <p>Lots of custom features stiched flawlessly into a custom design.</p>
      </li>
      <li>
        <a href="http://www.robertmeans.com/theburn2012" target="_blank"><img src="_images/theburn2012-website.jpg" alt="The Burn Mountain Bike Time Trial"></a>
        <h3>The Burn MTB TT</h3>
        <p>Bike race that I Directed in 2010 &amp 2012</p>
      </li>
      <li>
        <a href="http://www.robertmeans.com/acts" target="_blank"><img src="_images/acts-church-website.jpg" alt="Acts Church Website"></a>
        <h3>Acts Church</h3>
        <p>Cover image was a composite of several images provided by customer.</p>
        
      </li>
      <li>
        <a href="http://www.satillainc.com" target="_blank"><img src="_images/satilla-website.jpg" alt="Satilla, Inc"></a>
        <h3>Satilla, Inc.</h3>
        <p>Construction management company.</p>
      </li>
      <li>
        <a href="http://www.bennmediation.com" target="_blank"><img src="_images/bennmediation-website.jpg" alt="Benn Mediation"></a>
        <h3>Benn Mediation</h3>
        <p>Family law attorney practicing in Denver.</p>
      </li>
      <li>
        <p>Services include a lot more than just websites. Got a project? Just ask!</p>
      </li>
    </ul><!-- .list .moresites .cf -->
    </div><!-- #addSites01 -->

    </div><!-- #tab2 .tab .cf --><!-- Websites tab -->

    <div id="tab4" class="tab cf"><!-- $? tab -->
      <p>As a freelance Web Developer I work for chump change and I have more solutions than you have problems. Please feel free to do us both a favor and abuse this opportunity!</p>
    </div><!-- #tab4 .tab cf -->

  </div><!-- .tab-content -->

  </div><!-- .tabs -->

</section><!-- #div-two -->

<article id="div-three"><!-- begin .backstretch -->
<div class="row text-center">

  <div id="process_slider" class="flexslider_process">
    <ul class="slides">
      
      <li data-thumb="_images/step-01.png">
        <div class="slide_content">
          <div class="slide_title">Blueprint</div>
          <div class="slide_text">
            We'll research user expectations and target common use cases, developing a clear sitemap and user flow for intuitive engagement within your custom design.
          </div>
        </div><!-- /slide_content -->
      </li>
      
      <li data-thumb="_images/step-02.png">
        <div class="slide_content">
          <div class="slide_title">Design <span class="plus">+</span>  Create</div>
          <div class="slide_text">
            During this phase, we focus on brand experience, content engagement and creative expression through custom design working closely with clients to create an end result that both sides will be proud of.

          </div>
        </div><!-- /slide_content -->
      </li>
      
      <li data-thumb="_images/step-03.png">
        <div class="slide_content">
          <div class="slide_title">Develop <span class="plus">+</span>  Deploy</div>
          <div class="slide_text">
            Using the most appropriate technologies and interactive elements, We build standards-compliant, cross-platform websites and apps that are a pixel-perfect match to the design phase mockups. 
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
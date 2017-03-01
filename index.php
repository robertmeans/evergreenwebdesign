<?php require_once('_includes/popup-contactform.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
  Contact:      robert@evergreenwebdesign.com
                (720) 504.6323
  Last Update:  November, 23, 2016
  Comments:     You look very nice today! :)
-->
<head>
  <meta charset="UTF-8">
  <title>Evergreen Web Design - Website Development Evergreen, Colorado</title>
  <link rel="icon" type="image/ico" href="_images/favicon.ico">
  <link rel="image_src" href="http://www.evergreenwebdesign.com/_images/thumbnails/EWD-thumb-01.png" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Evergreen Web Design is a full-service Internet marketing firm offering custom solutions to virtually any marketing project.">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <script src="_scripts/modernizr.js?<?php echo time(); ?>"></script>
  <link rel="stylesheet" href="_css/style.css?<?php echo time(); ?>">

<!-- Google Analytics code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80245426-1', 'auto');
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

<section id="div-one-container">

<!-- <div class="fullscreen-bg"> -->
    <!-- <video loop muted autoplay poster="img/videoframe.jpg" class="fullscreen-bg__video"> -->
        <!-- <source src="video/big_buck_bunny.webm" type="video/webm"> -->
        <!-- <source src="_images/sky-bkg.mp4" type="video/mp4"> -->
        <!-- <source src="video/big_buck_bunny.ogv" type="video/ogg"> -->
    <!-- </video> -->
<!-- </div> -->



<div id="div-one">

<div id="branding">
  <div id="title">
    <p class="business-title">Evergreen Web Design</p>

    <!-- <p class="tagline">Preparing your vision for the future</p> -->
    <p class="tagline">Preparing your ideas for a bright future</p>

    <img class="ewd-logo" src="_images/Evergreen-Web-Design-Logo_bw.png" alt="Evergreen Web Design logo">
  </div>
</div><!-- #branding -->

<div id="product-container">
  <div class="product-box">
    <h1 class="product-item">Essentials</h1>
    <ul class="product-list">
      <li>Domain Names</li>
      <li>Hosting</li>
      <li>SSL Certificates</li>
    </ul>
    <p class="product-desc">Evergreen Web Design is a Certified GoDaddy Reseller. Buy through us! We can match any deal + you get GoDaddy's hardware and their renowned 24/7 customer support.</p>
  </div>

  <div class="product-box">
    <h1 class="product-item">Websites</h1>
    <ul class="product-list">
      <li>Concept</li>
      <li>Design</li>
      <li>Development</li>
    </ul>
    <p class="product-desc">Each project provides a unique opportunity to explore creative opportuinites and custom solutions. Find out how Evergreen Web Design can meet your specific online needs today!</p>
  </div>    

  <div class="product-box">
    <h1 class="product-item">Campaigns</h1>
    <ul class="product-list">
      <li>SEO</li>
      <li>Social Media</li>
      <li>Content Management</li>
    </ul>
    <p class="product-desc">Competitive industries demand precision marketing efforts to compete for coveted keywords and keyphrases. We can identify opportunities and design a stratigic campaign tailored just for you.</p> 
  </div>      
</div><!-- #product-container -->

    <div id="badge">
      <span class="badge-box">
        <!-- <h2>Website Solutions</h2>
        <h4>Evergreen, Colorado</h4> --> 
        <h2>Call: (303) WEBSITE</h2>
        <h4>That's (303) 932-7483</h4>
      </span>
      <div id="scrollDownSprite"><a href="#div-two" class="no-active-nav"></a></div>
    </div><!-- badge -->
    
</div>
</section><!-- #div-one -->
</header>

<?php require ("_includes/services.php"); ?>
<?php require ("_includes/about.php"); ?>
<?php require ("_includes/backstretch.php"); ?>



</div><!-- #wrapper -->
<?php include "_includes/footer.php" ?>
<?php require_once('_includes/contactform-code.php'); ?>

<script type="text/javascript" src="_scripts/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
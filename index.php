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

<div id="div-one">

<div id="branding">
  <div id="title">
    <p class="business-title">Evergreen Web Design<img class="ewd-logo" src="_images/Evergreen-Web-Design-Logo_bw.png" alt="Evergreen Web Design logo"></p>
    <p class="tagline">Developing your vision for the future</p>
  </div>
</div><!-- #branding -->




<!-- <div id="products">
  <div id="product-titles">
       <span class="ewd-product-titles">Essentials</span>
       <span class="ewd-product-titles">Websites</span>
       <span class="ewd-product-titles">Campaigns</span> 
  </div>

  <div id="product-items">
      <span class="ewd-product-items">
        <ul>
          <li>Domain Names</li>
          <li>Hosting</li>
          <li>SSL Certificates</li>
        </ul>
      </span>
      <span class="ewd-product-items">
        <ul>
          <li>Concept</li>
          <li>Design</li>
          <li>Development</li>
        </ul>
      </span>
      <span class="ewd-product-items">
        <ul>
          <li>SEO</li>
          <li>Social Media</li>
          <li>Content Management</li>
        </ul>
      </span>
  </div>

  <div id="product-desc">
      <span class="ewd-product-desc">Evergreen Web Design is a Certified GoDaddy Reseller We sell GoDaddy products...</span>
      <span class="ewd-product-desc">HTML5, CSS3, JavaScript &apm; PHP ensure your site is running on the most current, stable platform...</span>
      <span class="ewd-product-desc">We have packages available to service any size needs from managing social campaigns across Twitter, Facebook and Google+ to writing new content and updating WordPress.</span>
  </div>
</div> -->



<div id="product-container">
  <div class="product-box">
    <h1 class="product-item">Essentials</h1>
    <ul class="product-list">
      <li>Domain Names</li>
      <li>Hosting</li>
      <li>SSL Certificates</li>
    </ul>
    <p class="product-desc">Evergreen Web Design is a Certified GoDaddy Reseller. That means we can provide the exact same servivces for less.</p>
  </div>

  <div class="product-box">
    <h1 class="product-item">Websites</h1>
    <ul class="product-list">
      <li>Concept</li>
      <li>Design</li>
      <li>Development</li>
    </ul>
    <p class="product-desc">HMTL5, CSS3, JavaScript &amp; PHP ensure your site is running on the most current, stable platform and ready to manage your content within the current specifications.</p>
  </div>    

  <div class="product-box">
    <h1 class="product-item">Campaigns</h1>
    <ul class="product-list">
      <li>SEO</li>
      <li>Social Media</li>
      <li>Content Management</li>
    </ul>
    <p class="product-desc">We have packages available to service any size needs from managing social campaigns across Twitter, Facebook and Google+ to writing new content and updating WordPress.</p> 
  </div>      
</div><!-- #product-container -->




    <div id="badge">
      <span class="badge-box">
        <h2>Website Solutions</h2>
        <h4>Evergreen, Colorado</h4> 
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
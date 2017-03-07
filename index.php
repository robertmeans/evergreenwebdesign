<?php require_once('_includes/popup-contactform.php'); ?>
<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<div id="top-of-page"></div>


<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<a class="mobile-tel large-screen-gone" href="tel:(303)%20932-7483">Call: (303) WEB-SITE</a>

<header id="intro">
<a class="mobile_menu"></a>
<?php require('_includes/nav.php'); ?>

<section id="homepage-container">
<div id="div-one">

<div id="branding">
  <div id="title">
    <p class="business-title">Evergreen Web Design</p>
    <p class="tagline">Internet Services &amp; Marketing Solutions</p>
    <img class="ewd-logo" src="_images/Evergreen-Web-Design-Logo_bw.png" alt="Evergreen Web Design logo">
  </div>
</div><!-- #branding -->

<div id="product-container">
  <div class="product-box">
    <a href="#essentials" class="product-item">Essentials</a>
    <ul class="product-list">
      <li>Domain Names</li>
      <li>Hosting</li>
      <li>SSL Certificates</li>
    </ul>
    <p class="product-desc">Evergreen Web Design is a Certified GoDaddy Reseller. Buy through us! We can match any deal + you get GoDaddy's hardware and their renowned 24/7 customer support.</p>
  </div>

  <div class="product-box">
    <a href="#div-two" class="product-item">Websites</a>
    <ul class="product-list">
      <li>Concept</li>
      <li>Design</li>
      <li>Development</li>
    </ul>
    <p class="product-desc">Each project provides a unique opportunity to explore creative opportuinites and custom solutions. Find out how Evergreen Web Design can meet your specific online needs today!</p>
  </div>    

  <div class="product-box">
    <a href="#div-two" class="product-item">Campaigns</a>
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
        <a class="badge-tel" tabIndex="-1" href="tel:(303)%20932-7483"><h2>Call: (303) WEBSITE</h2></a>
        <h4>That's (303) 932-7483</h4>
      </span>
      <div id="scrollDownSprite"><a href="#div-two" class="no-active-nav"></a></div>
    </div><!-- badge -->
    
</div>
</section><!-- #div-one-container -->
</header>

<?php require ("_includes/essentials.php"); ?>
<?php require ("_includes/services.php"); ?>
<?php require ("_includes/about.php"); ?>
<?php require ("_includes/backstretch.php"); ?>



<?php include "_includes/footer.php" ?>
<?php require_once('_includes/contactform-code.php'); ?>

<script type="text/javascript" src="_scripts/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
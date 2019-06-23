<?php require_once('_includes/popup-contactform.php'); ?>
<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '295283581394466',
      xfbml      : true,
      version    : 'v3.2'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>  
<div id="top-of-page"></div>


<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<a class="mobile-tel large-screen-gone" href="tel:(303)%20932-7483">Call: (303) WEBSITE</a>

<header id="intro">
<a class="mobile_menu"></a>
<?php require('_includes/nav.php'); ?>

<section id="homepage-container">
<div id="div-one">

<div id="branding">
  <div id="title">
    <p class="business-title"><span class="evergreen-spacing">EVERGREEN</span> WEB DESIGN</p>
    <p class="tagline">Function by Design</p>
    <img class="ewd-logo" src="_images/Evergreen-Web-Design-Logo_bw.png" alt="Evergreen Web Design logo">
  </div>
</div><!-- #branding -->
<div id="mobile-header">
  <!-- <h1>Functional Design Developed Creatively</h1> -->
  <h1>Building Websites That Work, <br class="br-gone" />
  Fixing Ones That Don't.</h1>
</div>
<div id="product-container">
  <div class="product-box">
    <a href="#div-two" class="product-item">Services</a>
    <ul class="product-list first-list">
      <li>Building websites that work</li>
      <li>Fixing ones that don't</li>
      <!-- <li>&nbsp;</li> -->
    </ul>
    <p class="product-desc">No matter what framework or platform your project currently resides or what your future vision demands, Evergreen Web Design has you covered. Full stack development at your service.</p> 
  </div>

  <div class="product-box">
    <a href="#div-two" class="product-item">Development</a>
    <ul class="product-list">
      <li>Websites</li>
      <li>Database</li>
      <li>eCommerce</li>
    </ul>
    <!-- <p class="product-desc">Each project provides a unique opportunity to explore creative opportuinites and custom solutions. Find out how Evergreen Web Design can meet your specific online needs today!</p> -->
    <p class="product-desc">Where better to highlight development skills than right here?! This site was built the old fashioned way - by hand in a text editor. Your one-stop answer factory awaits only a phone call away.</p>
  </div>    

  <div class="product-box">
    <a href="#essentials" class="product-item">Essentials</a>
    <ul class="product-list">
      <li>Hosting</li>
      <li>Domain Names</li>
      <li>SSL Certificates</li>
    </ul>
    <p class="product-desc">Evergreen Web Design is a Certified GoDaddy Reseller. Buy through us! We can match any deal + you get GoDaddy's hardware and their renowned 24/7 customer support.</p>
  </div>
      
</div><!-- #product-container -->

    <div id="badge">
      <span class="badge-box">
        <a class="badge-tel" tabIndex="-1" href="tel:(303)%20932-7483"><h2>Call: (303) WEBSITE</h2></a>
        <h4>That's (303) 932-7483</h4>
      </span>
      <div id="scrollDownSprite"><a href="#essentials" class="no-active-nav"></a></div>
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
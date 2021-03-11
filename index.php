<?php 
// error_reporting(0);
// ^^ reporting off ---------------
// below - reporting on -----------
error_reporting(-1); // reports all errors
// ini_set("display_errors", "1"); // shows all errors
ini_set("log_errors", 1);
ini_set("error_log", "php-error.log");
?>
<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>
<body>
<?php // require_once 'popup-contact.php'; // new form 05.02.20 ?>
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
  <h1>Building Websites That Work, <br class="br-gone" />
  Fixing Ones That Don't.</h1>
</div>

<div id="product-container">
<ul>
  <li>
    <a href="#div-two">Concept</a>
    <ul>
      <li>Research Industry Trends</li>
      <li>Conceptualize Your Vision</li>
      <li>Integrate Your Aesthetics</li>
    </ul>
    <p>Every project starts with getting to know you, your unique tastes and how we might convey the spirit of your idea across the Internet.</p>
  </li>
  <li>
    <a href="#div-two">Design</a>
    <ul>
      <li>UX (User Experience)</li>
      <li>Intuitive Presentation</li>
      <li>Fluid Design</li>
    </ul>
    <p>Working from a &quot;<i>form follows function</i>&quot; philosphy and a strong command of today's webspace environment, you can be confident your site will render beautifully across any device or viewport.</p>
  </li>
  <li>
    <a href="#div-two">Develpoment</a>
    <ul>
      <li class="dev-itm">Services</li>
      <li>1. Buiding Websites that Work</li>
      <li>2. Fixing Ones that Don't</li>
    </ul>
    <p>Anyone can build their own website just like anybody can be their own auto mechanic, realtor or attorney. When your goals exceed your time and patience, hire an expert.</p>
  </li>
</ul>
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

<?php // require ("_includes/essentials.php"); ?>
<?php require ("_includes/services.php"); ?>
<?php require ("_includes/about.php"); ?>
<?php require ("_includes/backstretch.php"); ?>

<?php include "_includes/footer.php" ?>
<?php require "contact-ewd.php" ?>

<script type="text/javascript" src="_scripts/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>

</body>
</html>
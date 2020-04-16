<?php $layout_context = "homepage"; ?>
<?php require('_includes/head.php'); ?>

<body itemscope itemtype="http://schema.org/Brewery">

<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div ierd="fb-root"></div>
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<?php require('_includes/navigation.php'); ?>
<?php require('_includes/banner.php'); ?>
<?php require('_includes/social-media.php'); ?>
<?php require('_includes/taphunter.php'); ?>
<div itemprop="hasMenu" id="food"> 
	<?php require('_includes/specialties.php'); ?>
	<?php require('_includes/starters.php'); ?>
	<?php require('_includes/soups-salads.php'); ?>
	<?php require('_includes/sandwiches.php'); ?>
</div><!-- #food -->
<?php require('_includes/location.php'); ?>
<?php require('_includes/footer.php'); ?>

<script src="js/aos.js"></script>
<script> 
	AOS.init({
		duration: 1200,
		easing: 'ease-in-out-back'
	}); 
</script>
<script type="text/javascript" src="js/jquery.backstretch.min.js"></script>
<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>
<?php $thisPage="home"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!--
Author: Robert Means
Website: http://www.robertmeans.com
Date: 03.21.14
-->
<head>
<link rel="icon" type="image/ico" href="_images/favicon.ico">
<META Http-Equiv="Cache-Control" Content="no-cache">
<META Http-Equiv="Pragma" Content="no-cache">
<META Http-Equiv="Expires" Content="0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>The Wildflower Caf&eacute; - Downtown Evergreen, Colorado</title>
<meta name="description" content="The Wildflower Caf&eacute; in Downtown Evergreen, Colorado">
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript" src="_scripts/functions.js"></script>
<link rel="stylesheet" type="text/css" href="_css/styles.css?<?php echo time(); ?>">

<!-- begin Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-57802700-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- end Google Analytics -->

</head>

<body>

<nav class="mobile"> 
	<ul>
			<li><a class="current" href="#" title="Homepage"><i class="fa fa-home fa-lg"></i><br>Home</a></li>	
    	<li><a class="daily-menu-btn" href="menu.php" title="Daily Menu served 7 days a week"><i class="fa fa-cutlery"></i><br>Daily<br>Menu</a></li>
    	<li><a class="sushi-menu-btn" href="sushi_menu.php" title="Sushi Night Thursdays from 5:30 to 9:00 PM"><i class="fa fa-star-o fa-lg"></i><br>Sushi<br>Menu</a></li>
    	<li class="end_right"><a class="find-us-btn" href="find_us.php" title="Find us"><i class="fa fa-search"></i><br>Find<br>us</a></li>
	</ul>         
</nav><!-- nav -->

<div id="wrapper">
<div id="menu_header">
<a name="top"><img src="images/spacer.gif" border="0" width="1" height="1" /></a><br /><a href="index.php" title="The Wildflower Caf&eacute;, Downtown Evergreen, Colorado"><img src="_images/index_header.jpg" border="0" width="100%" alt="The Wildflower Caf&eacute;, Downtown Evergreen, Colorado" /></a>

<nav class="large_screen">
	<ul>     
		<li class="current no_menu"><a href="#" title="Current page: Homepage">Home</a></li>
	    <li><a href="menu.php" title="Daily Menu served 7 days a week">Daily Menu</a></li>
	    <li><a href="sushi_menu.php" title="Sushi Night Thursdays from 5:30 to 9:00 PM">Sushi Menu</a></li>
	    <li><a href="find_us.php" title="Find us">Find us</a></li> 
	</ul>   
</nav><!-- nav -->
</div><!-- #menu_header -->

<div id="text_container">
	<h1>The Wildflower Café, Evergreen, Colorado</h1>
	<p>Monday - Saturday 7:30 AM - 2:00 PM<br>
	Sunday 8:00 AM - 2:00 PM<br>
	<i class="fa fa-phone-square"></i> <a class="tel" tabIndex="-1" href="tel:(303) 674-3323">303.674.3323</a></p>

	<p>Located in historic Downtown Evergreen, Colorado, The Wildflower Café offers a professional grade dose of local atmosphere and a <a href="menu.php">menu</a> that outgrew any reasonable measure of expectations a long time ago.</p>
	<p>Come see why this local favorite has earned the worldwide reputation for the smartest, most beautiful, happy, good customers in history!</p>
	<h3>Thursday Nights - Sushi Night</h3>
	<p>5:30 - 9:00 PM</p>
</div>
<div class="clear-fix"></div>

<?php include '_includes/footer.php'; ?>
</div><!-- wrapper -->

<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>
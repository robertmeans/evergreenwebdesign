<!DOCTYPE html>
<html lang="en">
<!--
  Author:       Robert Means
                Evergreen Web Design
                
  Contact:      robert@evergreenwebdesign.com
                (303) WEBSITE
                that's (303) 932.7483

  Comments:     You look very nice today! :)
-->
<head>
	<meta charset="UTF-8">
	<title>ABC Company</title>
	<!-- <link rel="icon" type="image/ico" href="_images/favicon.ico"> -->
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="_scripts/custom-modernizr.js?<?php echo time(); ?>"></script>
	<link rel="stylesheet" href="styles.css?<?php echo time(); ?>">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" type="text/css">

</head>
<body onload="document.forms[0].name.focus();">
<div id="bg-div-one">
  <img src="_images/under-construction-opacity.png" alt="Under Construction">
</div>
<div id="wrapper">
<header>
	<h1>ABC Company</h1>
	<img src="_images/under-construction.png" alt="Under Construction">
</header>
<section id="left-side">

<h2>Tag line attention grabber slogan jingle</h2>
  <ul>
  <li>Add some basic information about your company here.</li>
  <li>Services, Grand Opening date, etc.</li>
  <li>Use this area for whatever information you want to display while your site is being built.</li>
  <li>You don't have to use bullet points.</li>
  <li>They do convey information quickly and concisely though.</li>
  </ul>

</section>
<section id="right-side">
	<p class="right-center">While our Website is under construction please feel free to <a class="email-text" href="mailto:email@yourdomain.com">email us</a> for more information.</p>
  <p>Or use this section for whatever additional information you'd like.</p>


</section>

<?php include '_includes/footer.php' ?>

</div><!-- #wrapper -->

<script type="text/javascript" src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="expires" content="0">
	
	<title>Navigation 01</title>
	<link rel="icon" type="image/ico" href="_images/favicon.ico">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="ABC Company description here...">
	<meta name="format-detection" content="telephone=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
	<!-- <link href='https://fonts.googleapis.com/css?family=Courgette|Lato' rel='stylesheet' type='text/css'> -->
	<link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>

<nav>
	<ul>
		<li><a href="#01">Link One</a></li>
		<li class="has-children"><a href="#">Link Two <span class="arrow arrow-down"></span></a>
			<ul>
				<li><a href="#sub01">Sub Two 01</a></li>
				<li class="has-children"><a href="#sub02">Sub Two 02 <span class="arrow arrow-down arrow-right"></span></a>
					<ul>
						<li><a href="#deepernow01">Deeper 1</a></li>
						<li><a href="#deepernow02">Deeper 2</a></li>
					</ul>
				</li>
			</ul>

		</li>
		<li><a href="#03">Link Three</a></li>
		<li><a href="#04">Link Four</a></li>
		<li><a href="#05">Link Five</a></li>
	</ul>
</nav>


<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>	
</body>
</html>
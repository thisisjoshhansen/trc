<?php include("scripts/jinsert.php"); ?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>TRC</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<link rel="apple-touch-icon" media="all" href="images/homescreen_icon.png" />

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/theme.css">

	<script src="js/libs/modernizr-2.0.6.min.js"></script>
	<script src="js/jquery-1.7.1.min.js"></script>
	<script src="js/jquery.address-1.4.min.js"></script>
	<script src="js/site.js"></script>
</head>
<body>
	
	<div id="bg"></div>
	
	<div id="header-container">
		<header class="wrapper clearfix">
			<a href="?!="><h1 id="title">two rivers church</h1></a>
			<nav>
				<ul>
					<li><a href="?!=/who-we-are">Who We Are</a></li>
					<li><a href="?!=/locations-and-services">Locations &amp; Services</a></li>
					<li><a href="?!=/resources">Resources</a></li>
					<li><a href="?!=/lorem-ipsum">Events</a></li>
					<li><a href="?!=/giving">Giving</a></li>
				</ul>
			</nav>
		</header>
		<div id="loading">
			<span>loading...</span>
		</div>
		<div id="error">
			<span>[ error ]</span>
		</div>
	</div>
	<div id="main-container">
		<div id="main" class="wrapper clearfix">
			
			<?php
				
				$url = $_GET['!'];
				
				if (!$url)
					$url = "/lorem-ipsum";
				
				echo('<div class="content">');
				include("content".$url.'.php');
				echo('</div>');
				
			?>
			
		</div> <!-- #main -->
	</div> <!-- #main-container -->

	<div id="footer-container">
		<footer class="wrapper">
			<h4>&copy;2012 two rivers church<?php if ($url) { echo('&nbsp; &nbsp;['.$url.']'); } ?></h4>
		</footer>
	</div>

</body>
</html>

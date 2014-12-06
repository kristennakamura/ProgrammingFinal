<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="author" content="Kristen Nakamura" />
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500|Roboto+Condensed:700' rel='stylesheet' type='text/css'>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<link rel="stylesheet" type="text/css" href="css/slider.css" />

		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<header>
			<div class="container clearfix">
				<a href="index.php"><h1 class="header-logo"></h1></a>
				<nav>
					<div id="main-nav-btn"><i class="fa fa-bars fa-2x"></i></div>
					<ul class="main-nav">
						<li><a <?php if($page_title == "UIBrush | Home" ) {echo 'class="active"';} ?> href="index.php">Home</a></li>
						<li><a <?php if($page_title == "UIBrush | About" ) {echo 'class="active"';} ?> href="about.php">About</a></li>
						<li><a <?php if($page_title == "UIBrush | Services" ) {echo 'class="active"';} ?> href="services.php">Services</a></li>
						<li><a href="#">Portfolio</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</header>
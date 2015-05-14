<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?> | Bridger's Portfolio</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2034 Iron Rush
http://www.tooplate.com/view/2034-iron-rush
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script src="js/resize-body.js" type="text/javascript"></script>
<script src="js/startup.js" type="text/javascript"></script>
<script src="js/events.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:3000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>
<div id="tooplate_body_wrapper">
<div id="tooplate_wrapper">
	<div id="tooplate_top_bar">
		<a class="social_btn twitter">&nbsp;</a>
		<a class="social_btn facebook">&nbsp;</a>
	</div>	

	<div id="tooplate_header">
		<div id="site_title"><h1><a href="#">Bridger's Portfolio</a></h1></div>
		<div style="clear: both;"></div>
		<div id="tooplate_menu">
			<ul>
				<?php
					$menu = 0;
					$menuItem = 0;
				?>
				<li class="header-link"><a href="index.php" <?php include "check-menu-selected.php"; ?>>Home</a></li>
				<li class="header-link"><a href="a-internet.php" <?php include "check-menu-selected.php"; ?>>The Internet</a>
					<ul>
						<li><a href="a-internet.php">How it Works</a></li>
						<li><a href="b-ip-addresses.php">How IP Adresses Work</a></li>
						<li><a href="n-servers.php">Servers</a></li>
						<li><a href="i-seo.php">SEO</a></li>
						<li><a href="f-html.php">HTML</a></li>
						<li><a href="g-css.php">CSS</a></li>
					</ul>
				</li>
				<li class="header-link"><a href="#" <?php include "check-menu-selected.php"; ?>>My Work</a>
					<ul>
						<li><a href="e-tuts-plus-site.php" target="_blank">Example Website of Mine</a></li>
						<li><a href="http://cakesofpatty.weebly.com/" target="_blank">Weebly Website of Mine</a></li>
						<li><a href="m-google-web-designer.php">Google Web Desginer</a></li>
						<li><a href="c-codecademy.php">Codecademy Progress</a></li>
					</ul>
				</li>
				<li class="header-link"><a href="#" <?php include "check-menu-selected.php"; ?>>Learning Web Development</a>
					<ul>
						<li><a href="l-udemy.php">Udemy</a></li>
						<li><a href="d-photoshop.php">Photoshop</a></li>
					</ul>
				</li>
			</ul>		
		</div> <!-- end of tooplate_menu -->
	</div> <!-- end of forever header -->
	
	<!--<div id="tooplate_middle">
		<div id="slider">
			<a href="#"><img src="images/slideshow/05.jpg" alt="" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." /></a>
			<a href="#"><img src="images/slideshow/02.jpg" alt="" title="Nullam ante leo, consectetur eget adipiscing et." /></a>
			<a href="#"><img src="images/slideshow/03.jpg" alt="" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." /></a>
			<a href="#"><img src="images/slideshow/04.jpg" alt="" title="Nulla faucibus luctus quam eget placerat." /></a>
			<a href="#"><img src="images/slideshow/01.jpg" alt="" title="Phasellus aliquet viverra posuere." /></a>
		</div>	
	</diEv> <!-- end of middle -->
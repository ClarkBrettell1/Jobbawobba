<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/main.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
		<script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/reframe.js/dist/jquery.reframe.min.js"></script>
		<title>Legion - Artist</title>
	</head>
	<header>
		<div class="nav-wrap">
			<a href="index"><img src="assets/img/logo.png" alt="Logo" class="logo"></a>
			<div id="nav-social-wrap">
				<a href="book" class="cta-button"><span>Book Online</span></a>
				<a href="book" class="cta-button"><span>0191555555</span></a>
			</div>

			<i class="lni lni-menu icon hamburger"></i>
		</div>
	</header>

	<div class="main-nav">
		<nav>
			<div>
				<ul id="nav-link-wrap">
					<li><a href="index">Home</a></li>
					<li><a href="about">About Us</a></li>
					<li><a href="Services">Services</a></li>
					<li><a href="Services">How it Works</a></li>
					<li><a href="listen">Prices</a></li>
					<li><a href="contact">Refer a Friend</a></li>
					<li><a href="dates">Contact us</a></li>
				</ul>
			</div>
	
		</nav>
	</div>

	
	<div>
		<div class="mobile-menu hide">
			<i class="lni lni-close cross"></i>
			<a href="listen">Listen</a>
			<a href="about">About</a>
			<a href="contact">Contact</a>
			<a href="dates">Show Dates</a>
		</div>
		<div class="hero-section">
		</div>
	</div>

<script>
	$('.cross').on("click", function(){
	 	$(".mobile-menu").addClass('hide').removeClass('show');
	 	$(".hamburger").addClass('show').removeClass('hide');
	})

    $('.hamburger').on("click", function(){
        $(".mobile-menu").addClass('show').removeClass('hide');
        $(".hamburger").removeClass('show').addClass('show');
    })
</script>
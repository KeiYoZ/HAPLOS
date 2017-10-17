<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Site Title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- NAVBAR START -->
	<div class="top-header" id="top">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?php the_field('logo'); ?>" alt=""></a>
					<a href="#"><span class="navbar-text">ENGLISH</span></a>
					<a href="#"><span class="navbar-text">|</span></a>
					<a href="#"><span class="navbar-text">FILIPINO</span></a>
				</div>
				<ul class="nav navbar-nav">

				</ul>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#top" style="color: #fff;">home</a></li>
						<li class="dropdown">
							<a style="color: #fff; class="dropdown-toggle" data-toggle="dropdown" href="#">about<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#ano_ang_haplos">Ano ang HAPLOS</a></li>
								<li><a href="#hemophilia">Ano ang Hemophilia?</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">contact<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#contact_haplos">Contact HAPLOS</a></li>
								<li><a href="#mga_ospital">Mga Ospital at Treatment Centers</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">home infusion process<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Ano ang Home Infusion Process?</a></li>
								<li><a href="#">Mga Benepisyo at Panganib nito</a></li>
								<li><a href="#">Dosage Calculator</a></li>
								<li><a href="#">Unang Bahagi: Paghahanda</a></li>
								<li><a href="#">Pangalawang Bahagi: Paghahanap ng Ugat</a></li>
								<li><a href="#">Pangatlong Bahagi: Pagturok</a></li>
								<li><a href="#">Pang-apat na Bahagi: Pagkatapos Mag-Infuse</a></li>
								<li><a href="#">Mga Pagkakamali sa Pagturok</a></li>
								<li><a href="#">Pagsusulit</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</div>
<!-- NAVBAR END -->
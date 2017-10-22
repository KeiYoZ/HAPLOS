<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Site Title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){
			//Smooth Scrolling
			$('a[href*="#"]') .not('[href="#"]') .not('[href="#0"]') .click(function(event) {if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {var target = $(this.hash); target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); if (target.length) {event.preventDefault(); $('html, body').animate({scrollTop: target.offset().top }, 500, function() {var $target = $(target); $target.focus(); if ($target.is(":focus")) {return false; } else {$target.attr('tabindex','-1'); $target.focus(); }; }); } } });

			// dot nav start
			$(document).ready(function($){
				var parPosition = [];
				$('.section').each(function() {
					parPosition.push($(this).offset().top);
				});

				$('a').click(function(){
					$('html, body').animate({
						scrollTop: $( $.attr(this, 'href') ).offset().top
					}, 500);
					return false;
				});

				$('.vNav ul li a').click(function () {
					$('.vNav ul li a').removeClass('active');
					$(this).addClass('active');
				}); 

				$('.vNav a').hover(function() {
					$(this).find('.label').show();
				}, function() {
					$(this).find('.label').hide();
				});

				$(document).scroll(function(){
					var position = $(document).scrollTop(),
					index; 
					for (var i=0; i<parPosition.length; i++) {
						if (position <= parPosition[i]) {
							index = i;
							break;
						}
					}
					$('.vNav ul li a').removeClass('active');
					$('.vNav ul li a:eq('+index+')').addClass('active');
				});
			});
			// dot nav end
		}); //document.ready end
	</script>
	<script type="text/javascript">

		function openStep(evt, tabGroup, tabLinkGroup, tabNumber, from = "tab") {
		    // Declare all variables
		    var i, tabcontent, tablinks;

		    // Get all elements with class="tabcontent" and hide them
		    tabcontent = document.getElementsByClassName(tabGroup);
		    for (i = 0; i < tabcontent.length; i++) {
		    	tabcontent[i].style.display = "none";
		    }

		    // Get all elements with class="tablinks" and remove the class "active"
		    tablinks = document.getElementsByClassName(tabLinkGroup);
		    for (i = 0; i < tablinks.length; i++) {
		    	tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }

		    // Show the current tab, and add an "active" class to the link that opened the tab
		    document.getElementById(tabNumber).style.display = "block";

		    if(from == "tab"){
		    	evt.currentTarget.className += " active";
		    }else if(from == "btn"){
		    	//debugger;
		    	var tabNumberTokens = tabNumber.split("-");
		    	var tabDigit = parseInt(tabNumberTokens[tabNumberTokens.length - 1]) - 1;

		    	tablinks[tabDigit].className += " active";
		    }
		}
	</script>
</head>
<body>
	<?php
	global $wp;
	$current_url = home_url(add_query_arg(array(),$wp->request));
	if (is_page('Home') || is_page('Front Page - En')) {
		$current_url = home_url(add_query_arg(array(),$wp->request)); //makes anchor links work from front-page and front-page-en
	} elseif (is_page('Tutorial')) {
		$current_url = home_url(); //can jump from tutorial to front-page and viceversa
	}
	?>
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
					<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/HAPLOS-Logo.png" alt=""></a>
					<a href="<?php echo $current_url; ?>/front-page-en"><span class="navbar-text">ENGLISH</span></a>
					<a href="#"><span class="navbar-text">|</span></a>
					<a href="<?php echo $current_url; ?>/"><span class="navbar-text">FILIPINO</span></a>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo $current_url; ?>/#top" style="color: #fff;">home</a></li>
						<li class="dropdown">
							<a style="color: #fff; class="dropdown-toggle" data-toggle="dropdown" href="#">about<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $current_url; ?>/#ano_ang_haplos">Ano ang HAPLOS</a></li>
								<li><a href="<?php echo $current_url; ?>/#hemophilia">Ano ang Hemophilia?</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">contact<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $current_url; ?>/#contact_haplos">Contact HAPLOS</a></li>
								<li><a href="<?php echo $current_url; ?>/#mga_ospital">Mga Ospital at Treatment Centers</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">home infusion process<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-banner">Ano ang Home Infusion Process?</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-bene-warn">Mga Benepisyo at Panganib nito</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-dosage-calc">Dosage Calculator</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-first-step">Unang Bahagi: Paghahanda</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-second-step">Pangalawang Bahagi: Paghahanap ng Ugat</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-third-step">Pangatlong Bahagi: Pagturok</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-fourth-step">Pang-apat na Bahagi: Pagkatapos Mag-Infuse</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-mistakes">Mga Pagkakamali sa Pagturok</a></li>
								<li><a href="<?php echo $current_url; ?>/tutorial/#tut-end">Pagsusulit</a></li>
							</ul>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
	</div>
	<!-- NAVBAR END -->
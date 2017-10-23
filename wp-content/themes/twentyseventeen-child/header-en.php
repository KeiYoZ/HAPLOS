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

	<script type="text/javascript">

		function computeDosage(){

			var hemo_types = document.getElementById('hemo-types');
			var hemo_type = hemo_types.options[hemo_types.selectedIndex].value;

			var weight = document.getElementById('weight-text').value;
			var percent_activity = document.getElementById('pec-act-text').value;

			var dosage = 0;

			if (hemo_type == 1){
				
				dosage = (weight * percent_activity)/2;

			}else if(hemo_type == 2){
				
				dosage = weight * percent_activity;

			}else if (hemo_type == 0){
				alert('Please Select a Hemophilia Type.');
			}

			document.getElementById('dosage-text').value = dosage;

		}

	</script>
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
					<a class="navbar-brand" href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/HAPLOS-Logo.png" alt=""></a>
					<?php if (is_page(125)){ ?>
					<a href="/haplos_wp/front-page-en"><span class="navbar-text" style="color:#fff; font-weight:bold;">ENGLISH</span></a>
					<a href="#"><span class="navbar-text">|</span></a>
					<a href="/haplos_wp"><span class="navbar-text">FILIPINO</span></a>
					<?php }else if (is_page(122)){?>
					<a href="/haplos_wp/tutorial-english"><span class="navbar-text" style="color:#fff; font-weight:bold;">ENGLISH</span></a>
					<a href="#"><span class="navbar-text">|</span></a>
					<a href="/haplos_wp/tutorial"><span class="navbar-text">FILIPINO</span></a>
					<?php } ?>
				</div>
				<div id="navbar" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="/haplos_wp/front-page-en/#top" style="color: #fff;">home</a></li>
						<li class="dropdown">
							<a style="color: #fff; class="dropdown-toggle" data-toggle="dropdown" href="#">about<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/haplos_wp/front-page-en/#ano_ang_haplos">What is HAPLOS?</a></li>
								<li><a href="/haplos_wp/front-page-en/#hemophilia">What is Hemophilia?</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">contact<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/haplos_wp/front-page-en/#contact_haplos">Contact HAPLOS</a></li>
								<li><a href="/haplos_wp/front-page-en/#mga_ospital">Hospitals and Treatment Centers</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a style="color: #fff;" class="dropdown-toggle" data-toggle="dropdown" href="#">home infusion process<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/haplos_wp/tutorial-english/#tut-banner">What is Home Infusion Process?</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-bene-warn">What are its Benetifs and Risks?</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-reminder">Things to Remember Before Infusing</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-dosage-calc">Dosage Calculator</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-first-step">Part One: Preparation</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-second-step">Part Two: Locating the Vein</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-third-step">Part Three: Puncturing the Vein (Venipuncture)</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-fourth-step">Part Four: Post-Infusion</a></li>
								<li><a href="/haplos_wp/tutorial-english/#tut-mistakes">Common Mistakes in Venipuncture
									<li><a href="/haplos_wp/tutorial-english/#tut-end">Practice Test</a></li>
								</ul>
							</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div>
			</nav>
		</div>
	<!-- NAVBAR END -->
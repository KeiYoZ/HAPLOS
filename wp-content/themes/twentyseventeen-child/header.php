<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Site Title</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function(){

			//Smooth Scrolling
			$('a[href*="#"]') .not('[href="#"]') .not('[href="#0"]') .click(function(event) {if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname ) {var target = $(this.hash); target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); if (target.length) {event.preventDefault(); $('html, body').animate({scrollTop: target.offset().top }, 850, function() {var $target = $(target); $target.focus(); if ($target.is(":focus")) {return false; } else {$target.attr('tabindex','-1'); $target.focus(); }; }); } } });

			//Navigation dot bar
			$(document).ready(function(){
				$.scrollTo = $.fn.scrollTo = function(x, y, options){
					if (!(this instanceof $)) return $.fn.scrollTo.apply($('html, body'), arguments);
					options = $.extend({}, {
						gap: {
							x: 0,
							y: 0
						},
						animation: {
							easing: 'swing',
							duration: 600,
							complete: $.noop,
							step: $.noop
						}
					}, options);
					return this.each(function(){
						var elem = $(this);
						elem.stop().animate({
							scrollLeft: !isNaN(Number(x)) ? x : $(y).offset().left + options.gap.x,
							scrollTop: !isNaN(Number(y)) ? y : $(y).offset().top + options.gap.y
						}, options.animation);
					});
				};
				var aChildren = $("nav li").children();
				var aArray = [];
				for (var i=0; i < aChildren.length; i++) {    
					var aChild = aChildren[i];
					var ahref = $(aChild).attr('href');
					aArray.push(ahref);
				}     
				$(window).scroll(function(){
					var windowPos = $(window).scrollTop();
					var windowHeight = $(window).height();
					var docHeight = $(document).height();
					for (var i=0; i < aArray.length; i++) {
						var theID = aArray[i];
						var divPos = $(theID).offset().top; 
						var divHeight = $(theID).height(); 
						if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
							$("a[href='" + theID + "']").addClass("name-active");
						} else {
							$("a[href='" + theID + "']").removeClass("name-active");
						}
					}
					if(windowPos + windowHeight == docHeight) {
						if (!$("nav li:last-child a").hasClass("name-active")) {
							var navActiveCurrent = $(".name-active").attr("href");
							$("a[href='" + navActiveCurrent + "']").removeClass("name-active");
							$("nav li:last-child a").addClass("name-active");
						}
					}
				});
				$("nav a").click(function(evn){
					evn.preventDefault();
					$('html,body').scrollTo(this.hash, this.hash);
				});
			});


		}); //document.ready end
	</script>
</head>
<body>
	<!-- SIDEBAR -->
	<div class="sidebar">
		<nav class="sidebar-nav">
			<ul>
				<li><a href="#top" class="dot name-active"><span></span></a></li>
				<li><a href="#ano_ang_haplos" class="dot"><span></span></a></li>
				<li><a href="#hemophilia" class="dot"><span></span></a></li>
				<li><a href="#contact_haplos" class="dot"><span></span></a></li>
				<li><a href="#mga_ospital" class="dot"><span></span></a></li>
			</ul>
		</nav>
	</div>
	<!-- /sidebar -->
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
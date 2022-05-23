<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, viewport-fit=cover">
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<title>Draggable Dual-View Slideshow</title>
		<meta name="description" content="Draggable Dual-View Slideshow: A Slideshow with two views and content area" />
		<meta name="keywords" content="draggable, slideshow, fullscreen, carousel, views, zoomed, 3d transform, perspective, dragdealer" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700&display=swap" rel="stylesheet">

			<?php wp_head(); ?>
	</head>
	<body>
		<div class="container">
			
			<header id="header" class="codrops-header">
				<button class="slider-switch">Switch view</button>
			</header>
			<div id="overlay" class="overlay" style="background-image: url(<?php the_field( 'start_background_image' );?>);">
				<div class="dark-layer"></div>
				<div class="info">
					<h2>INSTRUCTIONS</h2>
					<span class="info-drag">Drag Sliders</span>
					<span class="info-keys">Use Arrows</span>
					<span class="info-switch">Switch view</span>
					<button>Got it!</button>	
				</div>
			</div>	
	
